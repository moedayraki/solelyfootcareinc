<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Information;
use App\Models\Services;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
        $information = Information::all();
        $services = Services::all();
        return view('welcome', [
            'information' => $information,
            'services' => $services
        ]);
    }

    public function sendmail()
    {
        $to = 'solelyfootcare@gmail.com';
        $name = $_POST['first_name'];
        $email = $_POST["email"];
        $text = $_POST["message"];
        $subject = "Someone Contacted Us";

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $message = '<table style="width:100%">
          <tr>
              <td>' . $name . ' </td>
          </tr>
          <tr><td>Email: ' . $email . '</td></tr>
          <tr><td>subject: ' . $subject . '</td></tr>
          <tr><td>Text: ' . $text . '</td></tr>

      </table>';

        if (@mail($to, $email, $message, $headers)) {
            redirect('/');
        } else {
            echo 'Something went wrong. Please check connection and refresh.';
        }
    }

    public function validate(Request $request)
    {
        if ($request->password == '5199963517' || $request->password == '5199963938') {
            return redirect('/information');
        }
        return redirect('/signin');
    }
}
