<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // Data diri
        $name = "Jenri Dewany Widya Sunandar";
        $nim = "221110017";
        $address = "mentally live in 4 Rue Étienne Marcel, 75002 Paris, France";
        $email = "221110017@student.mercubuana-yogya.ac.id";
        $phone = "6285156064172";
        $workExperience = "IT Project Manager(Q3 2022 - Present)<BR>Chatbot Developers (Q3 2020 - Q3 2022)";
        $skills = "Programming, Web Development, Database Management, Project Management, Video Editing";
        $hobbies = "Reading, Traveling, Photography";

        // Render HTML
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Personal Informations</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
            <style>
                body {
                    background-color: #f8f9fa;
                    font-family: 'Poppins', sans-serif;
                }
                .container {
                    margin-top: 50px;
                    background-color: #ffffff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                .profile-img {
                    max-width: 150px;
                    margin: 0 auto 20px;
                }
                .profile-img img {
                    width: 100%;
                    border-radius: 50%;
                }                
                .section-title {
                    margin-top: 30px;
                    font-size: 1.5em;
                    font-weight: bold;
                    text-align: center;
                    color: #333;
                }
            </style>
        </head>
        <body>

        <div class="container">
            <h2 class="text-center">Personal Information</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <th scope="row">NIM</th>
                        <td>$nim</td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td>$address</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td>$phone</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-title">Work Experience</div>
            <p class="text-center">$workExperience</p>

            <div class="section-title">Skills</div>
            <p class="text-center">$skills</p>

            <div class="section-title">Hobbies</div>
            <p class="text-center">$hobbies</p>
        </div>


        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
        HTML;
    }
    
}
?>