<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
include('../database/dbconnect.php');
$stmt = $pdo->prepare("SELECT * FROM students WHERE regnumber=?");
$stmt->execute([$_POST['regnumber']]);
if ($stmt->rowCount() > 0) {
    echo json_encode(array('success' => false, 'error' => 'user exists'));
} else {
    $data = [
        'email' => $_POST['email'],
        'regnumber' => $_POST['regnumber'],
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'password' => md5($_POST['password']),
        'verificationcode' => mt_rand(100000000, 999999999),
        'active' => false
    ];

    $sql = "INSERT INTO students (email,regnumber,name,surname,password,verificationcode,active) VALUES (:email,:regnumber,:name,:surname,:password,:verificationcode,:active)";

    try {
        $stmt = $pdo->prepare($sql)->execute($data);
        if ($stmt == true) {
            $code = $data['verificationcode'];
            $email = $data['email'];
            $message = '<!DOCTYPE html>
<html
  xmlns:v="urn:schemas-microsoft-com:vml"
  xmlns:o="urn:schemas-microsoft-com:office:office"
  lang="en"
>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--[if mso
      ]><xml
        ><o:OfficeDocumentSettings
          ><o:PixelsPerInch>96</o:PixelsPerInch
          ><o:AllowPNG /></o:OfficeDocumentSettings></xml
    ><![endif]-->
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        margin: 0;
        padding: 0;
      }
      a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: inherit !important;
      }
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
      }
      p {
        line-height: inherit;
      }
      .desktop_hide,
      .desktop_hide table {
        mso-hide: all;
        display: none;
        max-height: 0;
        overflow: hidden;
      }
      @media (max-width: 620px) {
        .image_block img.big,
        .row-content {
          width: 100% !important;
        }
        .mobile_hide {
          display: none;
        }
        .stack .column {
          width: 100%;
          display: block;
        }
        .mobile_hide {
          min-height: 0;
          max-height: 0;
          max-width: 0;
          overflow: hidden;
          font-size: 0;
        }
        .desktop_hide,
        .desktop_hide table {
          display: table !important;
          max-height: none !important;
        }
      }
    </style>
  </head>
  <body
    style="
      background-color: #e3e5e8;
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: none;
      text-size-adjust: none;
    "
  >
    <table
      class="nl-container"
      width="100%"
      border="0"
      cellpadding="0"
      cellspacing="0"
      role="presentation"
      style="
        mso-table-lspace: 0;
        mso-table-rspace: 0;
        background-color: #e3e5e8;
      "
    >
      <tbody>
        <tr>
          <td>
            <table
              class="row row-1"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                background-color: #e3e5e8;
              "
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        background-color: #fff;
                        color: #000;
                        width: 600px;
                        margin-top: 30px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              padding-left: 20px;
                              padding-right: 20px;
                              vertical-align: top;
                              padding-top: 30px;
                              padding-bottom: 15px;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <table
                              class="text_block block-1"
                              width="100%"
                              border="0"
                              cellpadding="15"
                              cellspacing="0"
                              role="presentation"
                              style="
                                mso-table-lspace: 0;
                                mso-table-rspace: 0;
                                word-break: break-word;
                              "
                            >
                              <tr>
                                <td class="pad">
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #393a3d;
                                        line-height: 1.2;
                                        font-family: Arial, Helvetica Neue,
                                          Helvetica, sans-serif;
                                      "
                                    >
                                      <p
                                        style="
                                          margin: 0;
                                          font-size: 14px;
                                          text-align: center;
                                        "
                                      >
                                        <span
                                          style="
                                            font-size: 36px;
                                            color: #393a3d;
                                          "
                                          ><strong>Hie ' . $data["name"] . ' ' . $_POST["surname"] . ',</strong>
                                          Great job getting up and
                                          running.</span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              class="row row-2"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                background-color: #e3e5e8;
              "
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        color: #000;
                        width: 600px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0;
                              padding-bottom: 0;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <table
                              class="image_block block-1"
                              width="100%"
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              role="presentation"
                              style="mso-table-lspace: 0; mso-table-rspace: 0"
                            >
                              <tr>
                                <td
                                  class="pad"
                                  style="
                                    width: 100%;
                                    padding-right: 0;
                                    padding-left: 0;
                                  "
                                >
                                  <div
                                    class="alignment"
                                    align="center"
                                    style="line-height: 10px"
                                  >
                                    <img
                                      class="big"
                                      src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/0bd8b69e-4024-4f26-9010-6e2a146401fb/Email%20Templates%20Assets%20Folder/OPAPP15/photo_balloon_balloon.jpg"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 600px;
                                        max-width: 100%;
                                      "
                                      width="600"
                                      alt="enginemailer"
                                      title="enginemailer"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              class="row row-3"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                background-color: #e3e5e8;
              "
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        background-color: #fff;
                        color: #000;
                        width: 600px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              padding-left: 30px;
                              padding-right: 30px;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <table
                              class="text_block block-1"
                              width="100%"
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              role="presentation"
                              style="
                                mso-table-lspace: 0;
                                mso-table-rspace: 0;
                                word-break: break-word;
                              "
                            >
                              <tr>
                                <td
                                  class="pad"
                                  style="
                                    padding-bottom: 10px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 30px;
                                  "
                                >
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #393a3d;
                                        line-height: 1.2;
                                        font-family: Arial, Helvetica Neue,
                                          Helvetica, sans-serif;
                                      "
                                    >
                                      <p style="margin: 0; font-size: 14px">
                                        <span style="font-size: 28px"
                                          >Don\'t lose the momentum.
                                        </span>
                                      </p>
                                      <p style="margin: 0; font-size: 14px">
                                        <span style="font-size: 28px"
                                          >Click the button to verify your
                                          account.</span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              class="button_block block-2"
                              width="100%"
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              role="presentation"
                              style="mso-table-lspace: 0; mso-table-rspace: 0"
                            >
                              <tr>
                                <td class="pad">
                                  <div class="alignment" align="left">
                                    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://localhost/elearn/verify.php" style="height:42px;width:160px;v-text-anchor:middle;" arcsize="8%" stroke="false" fillcolor="#55008A"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:16px"><![endif]-->
                                    <a
                                    href="http://localhost/elearn/script/verify.php?verificationcode=' . $code . '&regnumber=' . $data["regnumber"] . '"
                                    target="_blank"
                                      style="
                                        text-decoration: none;
                                        display: inline-block;
                                        color: #ffffff;
                                        background-color: #55008a;
                                        border-radius: 3px;
                                        width: auto;
                                        border-top: 1px solid #55008a;
                                        font-weight: 400;
                                        border-right: 1px solid #55008a;
                                        border-bottom: 1px solid #55008a;
                                        border-left: 1px solid #55008a;
                                        padding-top: 5px;
                                        padding-bottom: 5px;
                                        font-family: Arial, Helvetica Neue,
                                          Helvetica, sans-serif;
                                        text-align: center;
                                        mso-border-alt: none;
                                        word-break: keep-all;
                                      "
                                      ><span
                                        style="
                                          padding-left: 30px;
                                          padding-right: 30px;
                                          font-size: 16px;
                                          display: inline-block;
                                          letter-spacing: normal;
                                        "
                                        ><span
                                          dir="ltr"
                                          style="
                                            word-break: break-word;
                                            line-height: 32px;
                                          "
                                          >Verify account</span
                                        ></span
                                      ></a
                                    >
                                    <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              class="row row-4"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                background-color: #e3e5e8;
              "
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        color: #000;
                        width: 600px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0;
                              padding-bottom: 0;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <table
                              class="image_block block-1"
                              width="100%"
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              role="presentation"
                              style="mso-table-lspace: 0; mso-table-rspace: 0"
                            >
                              <tr>
                                <td
                                  class="pad"
                                  style="
                                    width: 100%;
                                    padding-right: 0;
                                    padding-left: 0;
                                  "
                                >
                                  <div
                                    class="alignment"
                                    align="center"
                                    style="line-height: 10px"
                                  >
                                    <img
                                      class="big"
                                      src="https://pro-bee-user-content-eu-west-1.s3.amazonaws.com/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/98761911-7cfb-4977-a5ec-1d41dfdd40f1/templates_images/up-white-grey-angle.png"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 600px;
                                        max-width: 100%;
                                      "
                                      width="600"
                                      alt="Image"
                                      title="Image"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              class="row row-5"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                background-color: #e3e5e8;
              "
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        background-color: #eceef1;
                        color: #000;
                        width: 600px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              padding-left: 30px;
                              padding-right: 30px;
                              vertical-align: top;
                              padding-top: 15px;
                              padding-bottom: 15px;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <table
                              class="text_block block-1"
                              width="100%"
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              role="presentation"
                              style="
                                mso-table-lspace: 0;
                                mso-table-rspace: 0;
                                word-break: break-word;
                              "
                            >
                              <tr>
                                <td
                                  class="pad"
                                  style="
                                    padding-bottom: 10px;
                                    padding-left: 10px;
                                    padding-right: 10px;
                                    padding-top: 25px;
                                  "
                                >
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #393a3d;
                                        line-height: 1.2;
                                        font-family: Arial, Helvetica Neue,
                                          Helvetica, sans-serif;
                                      "
                                    >
                                      <p style="margin: 0; font-size: 14px">
                                        <span style="font-size: 18px"
                                          >We\'re here to help</span
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              class="text_block block-2"
                              width="100%"
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              role="presentation"
                              style="
                                mso-table-lspace: 0;
                                mso-table-rspace: 0;
                                word-break: break-word;
                              "
                            >
                              <tr>
                                <td class="pad">
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #393a3d;
                                        line-height: 1.2;
                                        font-family: Arial, Helvetica Neue,
                                          Helvetica, sans-serif;
                                      "
                                    >
                                      <p style="margin: 0; font-size: 14px">
                                        <a
                                          style="
                                            text-decoration: none;
                                            color: #393a3d;
                                          "
                                          href="#"
                                          target="_blank"
                                          rel="noopener noreferrer"
                                          >Call us at 0772123123</a
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              class="divider_block block-3"
                              width="100%"
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              role="presentation"
                              style="mso-table-lspace: 0; mso-table-rspace: 0"
                            >
                              <tr>
                                <td class="pad">
                                  <div class="alignment" align="center">
                                    <table
                                      border="0"
                                      cellpadding="0"
                                      cellspacing="0"
                                      role="presentation"
                                      width="100%"
                                      style="
                                        mso-table-lspace: 0;
                                        mso-table-rspace: 0;
                                      "
                                    >
                                      <tr>
                                        <td
                                          class="divider_inner"
                                          style="
                                            font-size: 1px;
                                            line-height: 1px;
                                            border-top: 1px solid #babec5;
                                          "
                                        >
                                          <span>&#8202;</span>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              class="text_block block-4"
                              width="100%"
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              role="presentation"
                              style="
                                mso-table-lspace: 0;
                                mso-table-rspace: 0;
                                word-break: break-word;
                              "
                            >
                              <tr>
                                <td class="pad">
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #393a3d;
                                        line-height: 1.2;
                                        font-family: Arial, Helvetica Neue,
                                          Helvetica, sans-serif;
                                      "
                                    >
                                      <p style="margin: 0; font-size: 14px">
                                        <a
                                          style="
                                            text-decoration: none;
                                            color: #393a3d;
                                          "
                                          href="#"
                                          target="_blank"
                                          rel="noopener noreferrer"
                                          >Chat with us</a
                                        >
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <table
                              class="divider_block block-5"
                              width="100%"
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              role="presentation"
                              style="mso-table-lspace: 0; mso-table-rspace: 0"
                            >
                              <tr>
                                <td class="pad">
                                  <div class="alignment" align="center">
                                    <table
                                      border="0"
                                      cellpadding="0"
                                      cellspacing="0"
                                      role="presentation"
                                      width="100%"
                                      style="
                                        mso-table-lspace: 0;
                                        mso-table-rspace: 0;
                                      "
                                    >
                                      <tr>
                                        <td
                                          class="divider_inner"
                                          style="
                                            font-size: 1px;
                                            line-height: 1px;
                                            border-top: 1px solid #babec5;
                                          "
                                        >
                                          <span>&#8202;</span>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table
              class="row row-6"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                background-color: #e3e5e8;
              "
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        color: #000;
                        width: 600px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 0;
                              padding-bottom: 0;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <table
                              class="image_block block-1"
                              width="100%"
                              border="0"
                              cellpadding="0"
                              cellspacing="0"
                              role="presentation"
                              style="mso-table-lspace: 0; mso-table-rspace: 0"
                            >
                              <tr>
                                <td
                                  class="pad"
                                  style="
                                    width: 100%;
                                    padding-right: 0;
                                    padding-left: 0;
                                  "
                                >
                                  <div
                                    class="alignment"
                                    align="center"
                                    style="line-height: 10px"
                                  >
                                    <img
                                      class="big"
                                      src="https://pro-bee-user-content-eu-west-1.s3.amazonaws.com/public/users/Integrators/0db9f180-d222-4b2b-9371-cf9393bf4764/98761911-7cfb-4977-a5ec-1d41dfdd40f1/templates_images/down-grey-white-angle.png"
                                      style="
                                        display: block;
                                        height: auto;
                                        border: 0;
                                        width: 600px;
                                        max-width: 100%;
                                      "
                                      width="600"
                                      alt="Image"
                                      title="Image"
                                    />
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- <table
              class="row row-7"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="mso-table-lspace: 0; mso-table-rspace: 0"
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        background-color: #fff;
                        color: #000;
                        width: 600px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <div
                              class="spacer_block"
                              style="
                                height: 20px;
                                line-height: 20px;
                                font-size: 1px;
                              "
                            >
                              &#8202;
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table> -->
            <table
              class="row row-8"
              align="center"
              width="100%"
              border="0"
              cellpadding="0"
              cellspacing="0"
              role="presentation"
              style="
                mso-table-lspace: 0;
                mso-table-rspace: 0;
                background-color: #e3e5e8;
              "
            >
              <tbody>
                <tr>
                  <td>
                    <table
                      class="row-content stack"
                      align="center"
                      border="0"
                      cellpadding="0"
                      cellspacing="0"
                      role="presentation"
                      style="
                        mso-table-lspace: 0;
                        mso-table-rspace: 0;
                        background-color: #fff;
                        color: #000;
                        width: 600px;
                      "
                      width="600"
                    >
                      <tbody>
                        <tr>
                          <td
                            class="column column-1"
                            width="100%"
                            style="
                              mso-table-lspace: 0;
                              mso-table-rspace: 0;
                              font-weight: 400;
                              text-align: left;
                              vertical-align: top;
                              padding-top: 5px;
                              padding-bottom: 5px;
                              border-top: 0;
                              border-right: 0;
                              border-bottom: 0;
                              border-left: 0;
                            "
                          >
                            <table
                              class="text_block block-1"
                              width="100%"
                              border="0"
                              cellpadding="10"
                              cellspacing="0"
                              role="presentation"
                              style="
                                mso-table-lspace: 0;
                                mso-table-rspace: 0;
                                word-break: break-word;
                              "
                            >
                              <tr>
                                <td class="pad">
                                  <div style="font-family: sans-serif">
                                    <div
                                      class="txtTinyMce-wrapper"
                                      style="
                                        font-size: 12px;
                                        mso-line-height-alt: 14.399999999999999px;
                                        color: #555;
                                        line-height: 1.2;
                                        font-family: Arial, Helvetica Neue,
                                          Helvetica, sans-serif;
                                      "
                                    >
                                      <p style="margin: 0; font-size: 12px">
                                        <br />
                                      </p>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- End -->
    <div style="background-color: transparent">
      <div
        style="
          margin: 0 auto;
          min-width: 320px;
          max-width: 500px;
          overflow-wrap: break-word;
          word-wrap: break-word;
          word-break: break-word;
          background-color: transparent;
        "
        class="block-grid"
      >
        <div
          style="
            border-collapse: collapse;
            display: table;
            width: 100%;
            background-color: transparent;
          "
        >
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->
          <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:15px; padding-bottom:15px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
          <div
            class="col num12"
            style="
              min-width: 320px;
              max-width: 500px;
              display: table-cell;
              vertical-align: top;
            "
          >
            <div style="background-color: transparent; width: 100% !important">
              <!--[if (!mso)&(!IE)]><!-->
              <div
                style="
                  border-top: 0px solid transparent;
                  border-left: 0px solid transparent;
                  border-bottom: 0px solid transparent;
                  border-right: 0px solid transparent;
                  padding-top: 15px;
                  padding-bottom: 15px;
                  padding-right: 0px;
                  padding-left: 0px;
                "
              >
                <!--<![endif]-->

                <div
                  align="center"
                  class="img-container center autowidth"
                  style="padding-right: 0px; padding-left: 0px"
                >
                  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->

                  <a
                    href="https://goo.gl/sDhD5J"
                    target="_blank"
                    title="https://www.enginemailer.com/?utm_source=newsletter&utm_medium=email&utm_campaign=ff_footer"
                  >
                  
                  </a>
                  <!--[if mso]></td></tr></table><![endif]-->
                </div>

                <!--[if (!mso)&(!IE)]><!-->
              </div>
              <!--<![endif]-->
            </div>
          </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>
  </body>
</html>';

            $subject = "Confirm Registration";
            $mail = send_mail($email, $message, $subject);
            echo json_encode(array('success' => true, 'mail' => $mail));
        }
    } catch (PDOException $ex) {
        echo json_encode(array('success' => false, 'error' => $ex->getMessage()));
    }
}


function send_mail($email, $message, $subject)
{
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug  = 0;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls";
        $mail->Host       = 'smtp-mail.outlook.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pixelcreativesolutions@outlook.com';
        $mail->Password   = '4Pixel_Creative';
        $mail->Port       = 587;
        $mail->setFrom('pixelcreativesolutions@outlook.com', 'Elearn');
        $mail->addAddress($email);
        $mail->addReplyTo('pixelcreativesolutions@outlook.com', 'Elearn');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
        return 'Message has been sent';
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
