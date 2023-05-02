<?php
// Set Page Metadata
$PAGE_TITLE = "Page Not Found - Fraud PHP";

function ErrorPage()
{
  return <<<HTML
    <style>
      body {
        background-color: #f1f1f1;
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .container {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
        box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03),
          0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03),
          0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05),
          0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
        background-color: #fff;
        padding: 5rem;
      }

      h1 {
        font-size: 48px;
        margin-bottom: 20px;
      }

      p {
        font-size: 24px;
        margin-bottom: 30px;
      }

      a {
        color: #000;
        text-decoration: underline;
      }

      .btn {
        background-color: #333;
        font-weight: 600;
        color: aliceblue;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        opacity: 0.8;
        transition: opacity 0.3s ease;
      }

      .btn:hover {
        opacity: 1;
      }
    </style>
    <div class="container">
      <h1>404: Not Found</h1>
      <p>
        This is the 404 page. You can customize this page by editing the
        /error/404.html.
      </p>
      <a data-type="fraud-link" class="btn" href="/">Return to Home</a>
    </div>
HTML;
}

$result = [
  "content" => ErrorPage(),
  "title" => "Page Not Found - Fraud PHP",
];

echo json_encode($result);