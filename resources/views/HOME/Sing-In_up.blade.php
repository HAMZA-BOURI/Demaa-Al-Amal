@extends('HOME.Layouts.Master')
@section('titre')
    {{$titre="Sign In"}}
@endsection
@section('main')
    <br/>
    <br/>
    <h2 style="text-align: center"></h2>
    <div
        class="container"
        id="container"
        style="
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
          0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        width: 977px;
        max-width: 100%;
        min-height: 320px;
        height: 569px;
      "
    >
        <div
            class="form-container sign-up-container"
            style="
          position: absolute;
          top: 0;
          height: 100%;
          transition: all 0.6s ease-in-out;
        "
        >
            <form

                style="
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
          "
                method="post"
            >
                @csrf
                <h1 style="font-weight: bold; margin: 0">Create Account</h1>
                <div class="social-container" style="margin: 20px 0">
                    <a
                        href="#"
                        class="social"
                        style="
                border: 1px solid #dddddd;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
                color: #333;
                font-size: 14px;
                text-decoration: none;
              "
                    ><i class="fab fa-facebook-f"></i
                        ></a>
                    <a
                        href="#"
                        class="social"
                        style="
                border: 1px solid #dddddd;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
                color: #333;
                font-size: 14px;
                text-decoration: none;
              "
                    ><i class="fab fa-google-plus-g"></i
                        ></a>
                    <a
                        href="#"
                        class="social"
                        style="
                border: 1px solid #dddddd;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
                color: #333;
                font-size: 14px;
                text-decoration: none;
              "
                    ><i class="fab fa-linkedin-in"></i
                        ></a>
                </div>
                <span style="font-size: 12px"
                >or use your email for registration</span
                >
                <input
                    type="text"
                    placeholder="Name"
                    name="Name"
                    style="
              background-color: #eee;
              border: none;
              padding: 12px 15px;
              margin: 8px 0;
              width: 100%;
            "
                />
                <input
                    type="CIN"
                    placeholder="CIN"
                    name="CIN"
                    style="
              background-color: #eee;
              border: none;
              padding: 12px 15px;
              margin: 8px 0;
              width: 100%;
            "
                />
                <input
                    type="Username"
                    placeholder="Username"
                    name="Username"
                    style="
              background-color: #eee;
              border: none;
              padding: 12px 15px;
              margin: 8px 0;
              width: 100%;
            "
                />
                <input
                    type="password"
                    placeholder="Password"
                    name="PasswordS"
                    style="
              background-color: #eee;
              border: none;
              padding: 12px 15px;
              margin: 8px 0;
              width: 100%;
            "
                />
                <button
                    style="
              border-radius: 20px;
              border: 1px solid #ff4b2b;
              background-color: #ff4b2b;
              color: #ffffff;
              font-size: 12px;
              font-weight: bold;
              padding: 12px 45px;
              letter-spacing: 1px;
              text-transform: uppercase;
              transition: transform 80ms ease-in;
            "
                >
                    Sign Up
                </button>
            </form>
        </div>
        <div
            class="form-container sign-in-container"
            style="
          position: absolute;
          top: 0;
          height: 100%;
          transition: all 0.6s ease-in-out;
        "
        >
            <form
                action="{{route('Singin')}}"
                method="post"
                style="
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
          "
            >
                @csrf
                <h1 style="font-weight: bold; margin: 0">Sign in</h1>
                <div class="social-container" style="margin: 20px 0">
                    <a
                        href="#"
                        class="social"
                        style="
                border: 1px solid #dddddd;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
                color: #333;
                font-size: 14px;
                text-decoration: none;
                margin: 15px 0;
              "
                    ><i class="fab fa-facebook-f"></i
                        ></a>
                    <a
                        href="#"
                        class="social"
                        style="
                border: 1px solid #dddddd;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
                color: #333;
                font-size: 14px;
                text-decoration: none;
                margin: 15px 0;
              "
                    ><i class="fab fa-google-plus-g"></i
                        ></a>
                    <a
                        href="#"
                        class="social"
                        style="
                border: 1px solid #dddddd;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 5px;
                height: 40px;
                width: 40px;
                color: #333;
                font-size: 14px;
                text-decoration: none;
                margin: 15px 0;
              "
                    ><i class="fab fa-linkedin-in"></i
                        ></a>
                </div>
                <span style="font-size: 12px">use your account</span>
                <input
                    type="UserName"
                    placeholder="Username"
                    name="email"
                    style="
              background-color: #eee;
              border: none;
              padding: 12px 15px;
              margin: 8px 0;
              width: 100%;
            "
                />
                <input style="
          background-color: #eee;
          border: none;
          padding: 12px 15px;
          margin: 8px 0;
          width: 100%;
        " name="password" type="password" placeholder="Password"/>
                <a
                    href="#"
                    style="
              color: #333;
              font-size: 14px;
              text-decoration: none;
              margin: 15px 0;
            "
                ></a
                >
                <button style="
          border-radius: 20px;
          border: 1px solid #ff4b2b;
          background-color: #ff4b2b;
          color: #ffffff;
          font-size: 12px;
          font-weight: bold;
          padding: 12px 45px;
          letter-spacing: 1px;
          text-transform: uppercase;
          transition: transform 80ms ease-in;
        ">Sign In
                </button>
            </form>
        </div>
        <div
            class="overlay-container"
            style="
          position: absolute;
          top: 0;
          left: 50%;
          width: 50%;
          height: 100%;
          overflow: hidden;
          transition: transform 0.6s ease-in-out;
          z-index: 100;
        "
        >
            <div
                class="overlay"
                style="
            background: #ff416c;
            background: -webkit-linear-gradient(to right, #ff4b2b, #ff416c);
            background: linear-gradient(to right, #ff4b2b, #ff416c);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #ffffff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            /* transform: translateX(0); */
            transition: transform 0.6s ease-in-out;
          "
            >
                <div
                    class="overlay-panel overlay-left"
                    style="
              position: absolute;
              display: flex;
              align-items: center;
              justify-content: center;
              flex-direction: column;
              padding: 0 40px;
              text-align: center;
              top: 0;
              height: 100%;
              width: 50%;
              transform: translateX(0);
              transition: transform 0.6s ease-in-out;
            "
                >
                    <h1 style="font-weight: bold; margin: 0">Welcome Back!</h1>
                    <p
                        style="
                font-size: 14px;
                font-weight: 100;
                line-height: 20px;
                letter-spacing: 0.5px;
                margin: 20px 0 30px;
              "
                    >
                        To keep connected with us please login with your personal info
                    </p>
                    <button
                        class="ghost"
                        id="signIn"
                        style="
                border-radius: 20px;
                border: 1px solid #ff4b2b;
                background-color: #ff4b2b;
                color: #ffffff;
                font-size: 12px;
                font-weight: bold;
                padding: 12px 45px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: transform 80ms ease-in;
                background-color: transparent;
                border-color: #ffffff;
              "
                    >
                        Sign In
                    </button>
                </div>
                <div
                    class="overlay-panel overlay-right"
                    style="
              position: absolute;
              display: flex;
              align-items: center;
              justify-content: center;
              flex-direction: column;
              padding: 0 40px;
              text-align: center;
              top: 0;
              height: 100%;
              width: 50%;
              transform: translateX(0);
              transition: transform 0.6s ease-in-out;
            "
                >
                    <h1 style="font-weight: bold; margin: 0">Hello !</h1>
                    <p
                        style="
                font-size: 14px;
                font-weight: 100;
                line-height: 20px;
                letter-spacing: 0.5px;
                margin: 20px 0 30px;
              "
                    >
                        Enter your personal details and start journey with us
                    </p>
                    <button
                        class="ghost"
                        id="signUp"
                        style="
                border-radius: 20px;
                border: 1px solid #ff4b2b;
                background-color: #ff4b2b;
                color: #ffffff;
                font-size: 12px;
                font-weight: bold;
                padding: 12px 45px;
                letter-spacing: 1px;
                text-transform: uppercase;
                transition: transform 80ms ease-in;
                background-color: transparent;
                border-color: #ffffff;
              "
                    >
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
@endsection

