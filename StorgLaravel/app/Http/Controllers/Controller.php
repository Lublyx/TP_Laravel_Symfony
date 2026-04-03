<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class Controller
{
    private $apiKey = "392023af96b3cf7b70720d0992fd3ec6749f4cb1ba5c2625a06fbc5e3d40b793";
    private $baseUrl = "https://kandra-unmalleable-glayds.ngrok-free.dev";

    public function index()
    {
        if (Session::has('email')) {
            return redirect('/file');
        }
        return view('index');
    }

    public function register(Request $request)
    {

        $passwordHashed = hash('sha256', $request->password);

        $apiUri = $this->baseUrl . "/creation?userName={$request->username}&email={$request->email}&password={$passwordHashed}&apiKey={$this->apiKey}";

        $response = Http::withoutVerifying()->get($apiUri);

        if ($response->ok() && $response->body()) {
            return $this->doConnection($request->email, $passwordHashed);
        }


        return "Création de compte impossible";
    }

    public function connectionForm()
    {
        return view('connection');
    }

    public function connection(Request $request)
    {
        return $this->doConnection($request->email, hash('sha256', $request->password));
    }

    private function doConnection($email, $password)
    {

        $apiUri = $this->baseUrl . "/connection?login={$email}&mdp={$password}&apiKey={$this->apiKey}";

        $response = Http::withoutVerifying()->get($apiUri);

        if ($response->ok()) {

            $rep = $response->json();

            foreach ($rep as $key => $value) {
                if ($value) {
                    Session::put('email', $email);
                    Session::put('userId', (int) $key);

                    return redirect('/file');
                } else {
                    return "Identifiant incorrect";
                }
            }
        }
    }

    public function file()
    {
        $userId = Session::get('userId');

        $apiUri = $this->baseUrl . "/listuserfiles?userId={$userId}&apiKey={$this->apiKey}";
        $response = Http::withoutVerifying()->get($apiUri);
        $fileList = $response->json();

        return view('file', compact('fileList'));
    }

    public function logout()
    {
        Session::forget(['email', 'userId']);
        return redirect('/');
    }

    public function upload(Request $request)
    {
        $userId = Session::get('userId');

        $apiUri = $this->baseUrl . "/upload?userId={$userId}&apiKey={$this->apiKey}";

        $response = Http::withoutVerifying()
            ->attach(
                'file',
                fopen($request->file('file')->getRealPath(), 'r'),
                $request->file('file')->getClientOriginalName()
            )
            ->post($apiUri);

        if ($response->ok()) {
            return redirect('/file');
        }

        return "Impossible d'uploader";
    }

    public function download($fileName)
    {
        $userId = Session::get('userId');

        $apiUri = $this->baseUrl . "/download?fileName={$fileName}&userId={$userId}&apiKey={$this->apiKey}";

        $response = Http::get($apiUri);

        if ($response->ok()) {
            return Response::make($response->body(), 200, [
                'Content-Type' => 'application/octet-stream',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"'
            ]);
        }

        return "Téléchargement impossible";
    }
}
