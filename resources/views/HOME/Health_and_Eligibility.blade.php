@extends('HOME.Layouts.Master')
@section('titre')
    {{$titre="Health and Eligibility"}}
@endsection
@section('main')
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: #b22f2f;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        main {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section {
            margin-bottom: 20px;
        }

        .requirement {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            background: #f9f9f9;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .requirement:hover {
            transform: scale(1.02);
        }

        .requirement img {
            max-width: 100px;
            border-radius: 5px;
            transition: transform 0.3s;
        }

        .requirement img:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .requirement {
                flex-direction: column;
                text-align: center;
            }

            .requirement img {
                margin-bottom: 10px;
            }
        }
    </style>
    <div class="container">
        <header>
            <h1>Health and Eligibility</h1>
        </header>
        <main>
            <section>
                <h2>Requirements by Donation Type</h2>
                <p>Donating blood is a beautiful humanitarian act that helps save many lives, but in order to ensure the safety of the donor and the recipient of the blood, appropriate conditions must be met by the donor before the donation process is carried out. Below, we will talk about ten conditions that a donor must meet in order to be able to donate blood.</p>
            </section>
            <section class="requirement">
                <h3>Age</h3>
                <p>The donor must be at least 18 years old, and not more than 65 years old. People under the age of 18 are still in the stage of growth and organ development, and therefore cannot donate easily and comfortably, while people over the age of 65 are considered more susceptible to chronic diseases that affect the quality of donated blood.</p>
                <img src="images/age.png" alt="Age requirement">
            </section>
            <section class="requirement">
                <h3>Good Health</h3>
                <p>The donor must be in good health and have sufficient physical fitness, because the donor’s health affects the quality of the donated blood, and the donated blood is used to treat many medical conditions.</p>
                <img src="images/food.png" alt="Health requirement">
            </section>
            <section class="requirement">
                <h3>Absence of Chronic Diseases</h3>
                <p>The donor must not suffer from heart disease, cancer, liver, or diabetes, because these diseases affect the quality of the donated blood and make it unfit for medical use.</p>
                <img src="images/chronicDiseases.png" alt="Chronic diseases requirement">
            </section>
            <section class="requirement">
                <h3>Absence of Contagious Diseases</h3>
                <p>The donor must not be infected with contagious diseases such as AIDS and hepatitis, and a blood test must be performed before the donation process is made to ensure that there are no contagious diseases.</p>
                <img src="images/contagiousDiseases.png" alt="Contagious diseases requirement">
            </section>
            <section class="requirement">
                <h3>Not Taking Certain Medications</h3>
                <p>The donor must stop taking medications that affect blood quality before donating blood, and must stop taking some medications that affect the blood clotting process.</p>
                <img src="images/medication.png" alt="Medications requirement">
            </section>
            <section class="requirement">
                <h3>Weight</h3>
                <p>The donor’s weight must be more than 50 kilograms, because people who weigh more than this limit can donate blood safely.</p>
            </section>
            <section class="requirement">
                <h3>Gender</h3>
                <p>The donor must be a male or a non-pregnant female, because pregnancy affects the quality of the donated blood, and health problems may occur for the pregnant woman and the fetus. In addition to a sexual safe life.</p>
            </section>
            <section class="requirement">
                <h3>Time</h3>
                <p>The donor must have had sufficient rest and eaten an iron-rich meal at least 24 hours before donating.</p>
            </section>
            <section class="requirement">
                <h3>Residence</h3>
                <p>The donor must reside in a specific area for a specific period, because some tropical diseases can be transmitted from one area to another.</p>
            </section>
            <section class="requirement">
                <h3>Previous Donation</h3>
                <p>The donor must have donated blood at least three months before, in order to replace the donated blood and replenish the blood cells in the donor’s body.</p>
            </section>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const requirements = document.querySelectorAll('.requirement');

            requirements.forEach(requirement => {
                requirement.addEventListener('mouseover', () => {
                    requirement.style.backgroundColor = '#e12727';
                    requirement.style.color = 'white';
                });

                requirement.addEventListener('mouseout', () => {
                    requirement.style.backgroundColor = '#f9f9f9';
                    requirement.style.color = 'black';
                });
            });
        });
    </script>
@endsection
