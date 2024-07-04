@extends('HOME.Layouts.Master')
@section('titre')
    {{$titre="What Happens to Donated Blood"}}
@endsection
@section('main')
<br>
    <div class="container" style="max-width: 1200px; margin: auto; padding: 20px; background-color: #ffffff">
        <h1 style="color: #b22f2f; text-align: center; margin: 20px 0; font-size: 2.5em; animation: fadeIn 2s ease-in-out;">What Happens to Donated Blood</h1>

        <section>
            <h2 style="color: #b22f2f; text-align: center; margin: 20px 0; font-size: 2em; animation: fadeIn 2s ease-in-out;">Step One: The Donation</h2>
            <img src="images/donation.png" alt="The Donation" style="max-width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <ul style="color: #333; font-size: 1.2em; line-height: 1.6; animation: fadeIn 2s ease-in-out; list-style-type: disc; padding-left: 20px;">
                <li>You arrive for your blood donation appointment.</li>
                <li>Health history and mini physical are completed.</li>
                <li>About 1 pint of blood is collected, along with several small test tubes for testing.</li>
                <li>Your donation, test tubes, and donor record are labeled with an identical bar code.</li>
                <li>Your donation is kept on ice before being taken to a Red Cross center for processing.</li>
            </ul>
        </section>

        <section>
            <h2 style="color: #b22f2f; text-align: center; margin: 20px 0; font-size: 2em; animation: fadeIn 2s ease-in-out;">Step Two: Processing</h2>
            <img src="images/processing.png" alt="Processing" style="max-width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <ul style="color: #333; font-size: 1.2em; line-height: 1.6; animation: fadeIn 2s ease-in-out; list-style-type: disc; padding-left: 20px;">
                <li>Information about your donation is scanned into a computer database.</li>
                <li>Most whole blood donations are spun in centrifuges to separate into red cells, platelets, and plasma.</li>
                <li>Plasma may be processed into components like cryoprecipitate.</li>
                <li>Red cells and platelets are leuko-reduced to remove white cells.</li>
                <li>Each component is packaged as a “unit” for transfusion.</li>
            </ul>
        </section>

        <section>
            <h2 style="color: #b22f2f; text-align: center; margin: 20px 0; font-size: 2em; animation: fadeIn 2s ease-in-out;">Step Three: Testing</h2>
            <img src="images/testing.jpg" alt="Testing" style="max-width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <ul style="color: #333; font-size: 1.2em; line-height: 1.6; animation: fadeIn 2s ease-in-out; list-style-type: disc; padding-left: 20px;">
                <li>Your test tubes arrive at a testing laboratory.</li>
                <li>A dozen tests are performed to establish blood type and check for infectious diseases.</li>
                <li>Test results are transferred electronically to the processing center within 24 hours.</li>
                <li>If a test result is positive, your donation is discarded and you are notified.</li>
            </ul>
        </section>

        <section>
            <h2 style="color: #b22f2f; text-align: center; margin: 20px 0; font-size: 2em; animation: fadeIn 2s ease-in-out;">Step Four: Storage</h2>
            <img src="images/storage.png" alt="Storage" style="max-width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <ul style="color: #333; font-size: 1.2em; line-height: 1.6; animation: fadeIn 2s ease-in-out; list-style-type: disc; padding-left: 20px;">
                <li>Suitable units are labeled and stored after test results are received.</li>
                <li>Red cells are stored in refrigerators at 6ºC for up to 42 days.</li>
                <li>Platelets are stored at room temperature in agitators for up to five days.</li>
                <li>Plasma and cryo are frozen and stored in freezers for up to one year.</li>
            </ul>
        </section>

        <section>
            <h2 style="color: #b22f2f; text-align: center; margin: 20px 0; font-size: 2em; animation: fadeIn 2s ease-in-out;">Step Five: Distribution</h2>
            <img src="images/distribution.jpg" alt="Distribution" style="max-width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <ul style="color: #333; font-size: 1.2em; line-height: 1.6; animation: fadeIn 2s ease-in-out; list-style-type: disc; padding-left: 20px;">
                <li>Blood is available for shipment to hospitals 24/7.</li>
                <li>Hospitals keep some blood units on shelves but may request more during emergencies.</li>
            </ul>
        </section>

        <section>
            <h2 style="color: #b22f2f; text-align: center; margin: 20px 0; font-size: 2em; animation: fadeIn 2s ease-in-out;">Step Six: Transfusion</h2>
            <img src="images/transfusion.png" alt="Transfusion" style="max-width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <ul style="color: #333; font-size: 1.2em; line-height: 1.6; animation: fadeIn 2s ease-in-out; list-style-type: disc; padding-left: 20px;">
                <li>An ill or injured patient arrives at a hospital or treatment center.</li>
                <li>Physicians determine the need for transfusion and its type.</li>
                <li>Blood transfusions are given in various circumstances, including serious injuries, surgeries, childbirth, anemia, blood disorders, cancer treatments, and more.</li>
                <li>Red blood cells increase hemoglobin and iron levels for better oxygen delivery in patients with iron deficiency or anemia.</li>
                <li>Platelet transfusions help patients with insufficient platelets due to illness or chemotherapy.</li>
                <li>Plasma transfusions aid patients with liver failure, severe infections, and serious burns.</li>
            </ul>
        </section>
    </div>
    <br>
@endsection
