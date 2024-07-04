@extends('HOME.Layouts.Master')
@section('titre')
    {{$titre="Health and Eligibility"}}
@endsection
@section('main')
    <br>
    <div class="container"
         style="max-width: 1200px; margin: 0 auto; padding: 20px; text-align: center; animation: fadeIn 2s;">
        <h1 style="margin: 20px 0; color: #b22f2f; font-size: 2.5em; position: relative;">
            Free Health Screening and Blood Tests
            <span
                style="content: ''; width: 100px; height: 4px; background: #e12727; position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); border-radius: 5px;"></span>
        </h1>
        <h2 style="margin: 20px 0; color: #e12727;">Your Health Screening</h2>
        <p style="font-size: 1.2em; line-height: 1.6; color: #333;">When you come in to donate, you help provide
            lifesaving care to patients in need. But you also receive the added benefit of a free mini-health
            assessment, provided by a trained Demaa Al-Amal staff member.</p>
        <div class="section"
             style="margin: 40px 0; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 1.5s;">
            <p style="font-size: 1.2em; line-height: 1.6; color: #333;">Prior to donating blood, all donors will receive
                a free health screening. At the time of your donation, your blood pressure, hemoglobin, and pulse will
                be checked. We send these vitals in email where you can track and monitor your results. You can access
                this information as well as past health information obtained during prior donations, at any time.</p>
            <img class="health-info" src=".\images\hand.png"
                 alt="Health Information"
                 style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        </div>
        <div class="section"
             style="margin: 40px 0; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 1.5s;">
            <h2 style="margin: 20px 0; color: #e12727;">What is done during the test and what is measured?</h2>
        </div>
        <div class="section class3"
             style="display: flex; flex-direction: column; align-items: center; margin: 40px 0; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 1.5s;">
            <i class="fas fa-heartbeat icon"
               style="font-size: 2em; color: #b22f2f; margin: 10px; animation: bounce 2s infinite;"></i>
            <img class="img-centered" src="images/BloodPressure.png" alt="Blood Pressure"
                 style="display: block; margin: 20px auto; width: 150px; transition: transform 0.3s;">
            <h5 style="margin: 10px 0; font-size: 1.5em; color: #b22f2f;">Blood Pressure</h5>
            <p style="font-size: 1.2em; line-height: 1.6; color: #333;">The Red Cross checks your blood pressure before
                every donation. When untreated, high blood pressure can increase the risk of heart attack, stroke and
                other health complications. Also known as hypertension, the condition usually has no symptoms, and is
                often called the "silent killer."</p>
        </div>
        <div class="section Class4"
             style="display: flex; flex-direction: column; align-items: center; margin: 40px 0; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 1.5s;">
            <i class="fas fa-heart icon"
               style="font-size: 2em; color: #b22f2f; margin: 10px; animation: bounce 2s infinite;"></i>
            <img class="img-centered" src="images/Pulse.png" alt="Pulse"
                 style="display: block; margin: 20px auto; width: 150px; transition: transform 0.3s;">
            <h5 style="margin: 10px 0; font-size: 1.5em; color: #b22f2f;">Pulse</h5>
            <p style="font-size: 1.2em; line-height: 1.6; color: #333;">Your pulse will be checked before every Red
                Cross blood donation. Staff will measure the number of times your heart beats per minute and count any
                irregular heartbeats. Your pulse rate gives insights into your heart rhythm and how well your heart may
                be working. A heart rate that is too fast, too slow, or irregular can indicate an underlying
                condition.</p>
        </div>
        <div class="section Class5"
             style="display: flex; flex-direction: column; align-items: center; margin: 40px 0; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 1.5s;">
            <i class="fas fa-vial icon"
               style="font-size: 2em; color: #b22f2f; margin: 10px; animation: bounce 2s infinite;"></i>
            <img class="img-centered" src="images/Hemoglobin.png" alt="Hemoglobin"
                 style="display: block; margin: 20px auto; width: 150px; transition: transform 0.3s;">
            <h5 style="margin: 10px 0; font-size: 1.5em; color: #b22f2f;">Hemoglobin</h5>
            <p style="font-size: 1.2em; line-height: 1.6; color: #333;">The Red Cross checks your hemoglobin before
                every donation to ensure that you are healthy enough to donate. Hemoglobin is a protein that contains
                iron and carries oxygen to the tissues in your body. Iron is essential to help your body to replace new
                red blood cells lost through blood donations.</p>
        </div>
    </div>
    <br>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }

            p {
                font-size: 1em;
            }
        }
    </style>
@endsection
