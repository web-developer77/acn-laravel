<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="telephone=no" name="format-detection" />
    <title>Nueva plantilla</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet" />
    <style type="text/css">
    html,
    body {
      width: 100%;
      font-family: lato, "helvetica neue", helvetica, arial, sans-serif;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      padding: 0;
      margin: 0;
      background-color: #f4f4f4 !important;
    }

    .top-bar-container {
      color: #cccccc;
    }

    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 600px;
      margin: 0 auto;
    }

    .top-bar p,
    a {
      font-size: 13px;
      color: #cccccc;
    }

    .nav-bar {
      background-color: #00ca4a;
      text-align: center;
    }

    .nav-bar img {
      width: 225px;
      height: 58px;
      padding: 2.3rem 0;
    }

    .header {
      background-color: #ffffff;
      padding: 2rem 0;
      max-width: 600px;
      margin: 0 auto;
      border-top-left-radius: 7px;
      border-top-right-radius: 7px;
    }

    .header h1 {
      margin: 0;
      font-size: 30px;
      font-family: lato, "helvetica neue", helvetica, arial, sans-serif;
      line-height: 36px;
      font-style: normal;
      font-weight: normal;
      color: #111111;
      text-align: center;
    }

    .mail-content {
      max-width: 600px;
      border-bottom-left-radius: 7px;
      border-bottom-right-radius: 7px;
      margin: 0 auto;
      background-color: #ffffff;
    }

    .container p {
      font-size: 18px;
      line-height: 27px;
      color: #666666;
    }

    .container {
      padding: 1rem 2rem;
    }

    .container h1 {
      font-size: 30px;
      line-height: 44px;
      padding: 1rem 0;
      color: #666666;
      text-align: center;
      margin: 0 auto;
    }

    .pin-code {
      padding: 1rem;
    }

    .line {
      border: 1px solid #fff;
      width: 560px;
      margin: 0.8rem auto;
    }

    .footer {
      background-color: #c9f1d5;
      text-align: center;
      max-width: 600px;
      margin: 0 auto;
    }

    .footer label {
      font-size: 20px;
      padding: 1rem 0;
      line-height: 24px;
    }

    .footer a {
      font-size: 18px !important;
      color: #00ca4a !important;
    }

    .detail {
      line-height: 21px;
      color: #666666;
      font-size: 14px;
      max-width: 600px;
      margin: 0 auto;
      padding: 2rem 0;
    }

    .detail a {
      text-decoration: underline;
      color: #111111;
      font-size: 14px;
    }

    @media (max-width: 600px) {
      .header {
        max-width: 100% !important;
      }

      .pin-code {
        padding: 0;
      }

      .container h1 {
        width: 100% !important;
      }
    }
    </style>
  </head>

  <body>
    <div class="top-bar-container">
      <div class="top-bar">
        <p>Vamunu</p>
        <a href="https://viewstripo.email/" target="_blank">View in browser</a>
      </div>
    </div>
    <div class="nav-bar">
      <img src="./images/logo-e.png" />
      <div class="header">
        <h1>Verify Email</h1>
      </div>
    </div>
    <div class="mail-content">
      <div class="container">
        <p>Thank you for validating your business email.</p>
        <br />
        <p>The code to validate your company email is:</p>
        <div class="pin-code">
          <h1>{{$pin}}</h1>
        </div>
        <p>
          For added security, your company administrator will need to activate
          your account in the Control Panel. Please contact your company to be
          validated in Vamunu!
        </p>
        <p>
          If your company is not yet registered in Vamunu, you can refer us.
        </p>
        <p>Cheers, <br />The Vamunu Team</p>
      </div>
    </div>
    <div class="line"></div>
    <div class="footer">
      <label>Need more help?</label><br />
      <a>help@vamunu.com</a>
    </div>
    <div class="detail">
      <p>
        You received this email because you just signed up for a new account. If
        it looks weird, <br /><a>view it in your browser.</a>
      </p>
      <p>Made with love in Panamá</p>
    </div>
  </body>

</html>