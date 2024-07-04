@extends('HOME.Layouts.Master')
@section('titre')
    {{$titre="Who You Could Help"}}
@endsection
@section('main')

    <br>
    <div style="font-family: 'Roboto', sans-serif; margin: 0; padding: 0; background-color: #f0f0f0;">
        <div class="container_W">
            <h1 class="main-title">Who You Could Help</h1>

            <div class="content">
                <p>Blood donations play a vital role in saving lives. When you donate blood, you're offering an incredible gift to those facing emergencies or undergoing continuous medical care.</p>
                <img src="/images/gift.png" alt="Gift of Blood Donation" class="animated-image">
            </div>

            <div class="content">
                <p>Hospitals and patients rely on nearly 5,000 individuals every day who selflessly give blood. It's crucial to ensure an adequate supply to meet the diverse needs of various medical situations.</p>
                <p>There's a particular need for new black donors as their blood can be especially valuable for black patients dealing with sickle cell disease. Matching blood from donors of the same ethnicity can be crucial for these patients, offering them a closer match and potentially life-saving support.</p>
                <p>Blood donation is an essential practice to help people in need. Despite this, many people are still reluctant to donate blood, often for fear of pain or blood loss. However, the benefits of donating blood are numerous and worth considering.</p>
            </div>

            <div class="content">
                <p>Donating blood can save a life. Each unit of blood donated can help up to three different people. Patients with illnesses such as cancer, blood disorders, or serious injuries often need blood transfusions to survive. By donating blood, you can make a significant difference in the lives of these people and their families.</p>
                <img src="/images/save3lives.png" alt="Save 3 Lives" class="animated-image">
            </div>

            <div class="content">
                <p>Blood donation is an important and beneficial practice for all participants. By donating blood, you can save lives, improve your own health, and help keep blood supplies high enough to meet the needs of patients who need it. We encourage everyone who can to consider donating blood to help those in need and contribute to a more supportive and responsible community.</p>
            </div>

        </div>

        <style>
            .container_W {
                width: 80%;
                margin: 0 auto;
                padding: 20px;
                background: #fff;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                border-radius: 8px;
            }

            .main-title {
                color: #b22f2f;
                font-size: 2.5em;
                text-align: center;
                margin-bottom: 20px;
                position: relative;
                animation: fadeIn 2s;
            }

            .content {
                margin: 20px 0;
            }

            .content p {
                font-size: 1.2em;
                line-height: 1.6;
                color: #333;
                animation: fadeInUp 1s;
            }

            .animated-image {
                width: 100%;
                max-width: 800px;
                height: auto;
                display: block;
                margin: 20px auto;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                opacity: 0;
                transform: scale(0.8);
                transition: opacity 1.5s ease, transform 1.5s ease;
            }

            .visible {
                opacity: 1;
                transform: scale(1);
            }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        </style>

        <script>
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.animated-image').forEach(image => {
                observer.observe(image);
            });
        </script>
    </div>
    <br>
    <br>
@endsection
