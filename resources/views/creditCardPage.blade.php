@extends("layouts.app")

@section("content")
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*Scrollbar setup*/
        ::-webkit-scrollbar {
            width: 1.3rem;
        }

        ::-webkit-scrollbar-track {
            background: rgb(255, 200, 246);
            margin-block: 0.25rem;
            border-radius: 100vw;
        }


        ::-webkit-scrollbar-thumb {
            background: rgb(145, 158, 173);
            border-radius: 100vw;
            border: .25rem solid rgb(255, 200, 246);
        }


        .buy-wrapper {
            padding-top: 80px;
        }

        .containeraaaa {
            max-width: 1000px;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        /* Card General Styles */
        .card {
            width: 100%;
            max-width: 550px;
            position: relative;
            color: #fff;
            transition: .3s ease all;
            transform: rotateY(0deg);
            transform-style: preserve-3d;
            cursor: pointer;
            border-radius: 1.5rem;
        }

        .card.active {
            transform: rotateY(180deg);
        }

        .card > div {
            padding: 30px;
            border-radius: 15px;
            min-height: 315px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 10px 10px 10px rgba(0, 60, 134, 0.3);
        }

        /* Front Card */
        .card .front {
            width: 100%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0.2),
                rgba(200, 80, 255, 1)
            );
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.5), -1 -1 2px #aaa, 1 1 2px #555;
            backdrop-filter: blur(0.65rem);
            -webkit-backdrop-filter: blur(0.65rem);
        }

        .front .brand-logo {
            text-align: right;
            min-height: 50px;
        }

        .front .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            max-width: 80px;
        }

        .front .chip {
            width: 100%;
            max-width: 50px;
            margin-bottom: 20px;
        }

        .front .group .label {
            font-size: 16px;
            color: #5d6872;
            -webkit-text-stroke: 0.15px #000;
            margin-bottom: 5px;
        }

        .front .group .number,
        .front .group .name,
        .front .group .expiration {
            color: #000;
            font-size: 22px;
            text-transform: uppercase;
        }

        .front .flexbox {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        /* ---------- Back Card ----------*/
        .back {
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0.2),
                rgba(255, 255, 255, 0.05)
            );
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.5),
            -1 -1 2px #aaa,
            1 1 2px #555;
            backdrop-filter: blur(0.8rem);
            -webkit-backdrop-filter: blur(0.8rem);

            position: absolute;
            top: 0;
            transform: rotateY(180deg);
            backface-visibility: hidden;
        }

        .back .magnetic-bar {
            height: 40px;
            background: #000;
            width: 100%;
            position: absolute;
            top: 30px;
            left: 0;
        }

        .back .details {
            margin-top: 60px;
            display: flex;
            justify-content: space-between;
        }

        .back .details p {
            margin-bottom: 5px;
        }

        .back .details #signature {
            width: 70%;
            color: #000;
        }

        .back .details #signature .signature {
            height: 40px;
            background: repeating-linear-gradient(skyblue 0, skyblue 5px, orange 5px, orange 10px);
        }

        .back .details #signature .signature p {
            line-height: 40px;
            font-family: 'Liu Jian Mao Cao', cursive;
            color: #000;
            font-size: 30px;
            padding: 0 10px;
            text-transform: capitalize;
        }

        .back .details #ccv {
            width: 20%;
            color: #000;
        }

        .back .details #ccv .ccv {
            background: #fff;
            height: 40px;
            color: #000;
            padding: 10px;
            text-align: center;
        }

        .back .legend {
            font-size: 14px;
            line-height: 24px;
            color: black;
        }

        .back .bank-link {
            font-size: 14px;
            color: #000;
        }

        /* ---------- Contenedor Boton ----------*/
        .container-btn .btn-open-form {
            width: 50px;
            height: 50px;
            font-size: 20px;
            line-height: 20px;
            background: #2364d2;
            color: #fff;
            position: relative;
            top: -25px;
            z-index: 2;
            border-radius: 100%;
            box-shadow: -5px 4px 8px rgba(24, 56, 182, 0.4);
            padding: 5px;
            transition: all .2s ease;
            border: none;
            cursor: pointer;
        }

        .container-btn .btn-open-form:hover {
            background: #1850b1;
        }

        .container-btn .btn-open-form.active {
            transform: rotate(45deg);
        }


        /* ---------- Card Form ----------*/
        .card-form {
            background: rgba(255, 255, 255, 0.4);
            width: 100%;
            max-width: 700px;
            padding: 40px 30px 30px 30px;
            border-radius: 10px;
            position: relative;
            top: -50px;
            z-index: 1;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            transition: clip-path .3s ease-out;
        }

        .card-form.active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }

        .card-form label {
            display: block;
            color: #3b3e41;
            -webkit-text-stroke: 0.1px #6e7881;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .card-form input,
        .card-form select,
        .btn-submit {
            border: 2px solid #CED6E0;
            font-size: 18px;
            height: 50px;
            width: 100%;
            padding: 5px 12px;
            transition: .3s ease all;
            border-radius: 5px;
        }

        .card-form input:hover,
        .card-form select:hover {
            border: 2px solid #93BDED;
        }

        .card-form input:focus,
        .card-form select:focus {
            outline: rgb(4, 4, 4);
            box-shadow: 1px 7px 10px -5px rgba(90, 116, 148, 0.3);
        }

        .card-form input {
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .card-form .flexbox {
            display: flex;
            justify-content: space-between;
        }

        .card-form .expire {
            width: 100%;
        }

        .card-form .ccv {
            min-width: 100px;
        }

        .card-form .group-select {
            width: 100%;
            margin-right: 15px;
            position: relative;
        }

        .card-form select {
            -webkit-appearance: none;
        }

        .card-form .group-select i {
            position: absolute;
            color: #CED6E0;
            top: 18px;
            right: 15px;
            transition: .3s ease all;
        }

        .card-form .group-select:hover i {
            color: #93bfed;
        }

        .card-form .btn-submit {
            border: none;
            padding: 10px;
            font-size: 22px;
            color: #fff;
            background: #2364d2;
            box-shadow: 2px 2px 10px 0px rgba(0, 85, 212, 0.4);
            cursor: pointer;
        }

        .card-form .btn-submit:hover {
            background: #1850b1;
        }

        .buy-product-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            padding-left: 150px;
            gap: 30px;
        }

        .buy-product-info {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .buy-product-image {
            height: 200px;
            width: 200px;
            object-fit: cover;
            object-position: center;
        }

        .buy-product-title{
            font-size: 35px;
        }

        .buy-product-count{
            display: flex;
            margin-bottom: 20px;
        }

        .buy-product-count-input{
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        .but_count{
            border-radius: 5px;
            color: black;
            width: 30px;
            font-weight: bolder;
            padding: 5px;
            background-color: #f3b0ff;
            border: 2px solid #e436d2;
        }
        button:focus{
            outline: none;
        }
        .sub_count{
            width: 50%;
        }

    </style>

    <div class="buy-wrapper d-flex">
        <div class="buy-product-container">
            <div class="buy-product-info">
                <div>
                    <img class="buy-product-image" alt=""
                         src="{{asset('uploads/content/'.$buyProduct->images[0]->productImage)}}">
                </div>
                <div class="buy-product-title">
                    {{$buyProduct->productName}}
                </div>
            </div>
            <form action="{{route('sold', $buyProduct->id)}}" method="post">
                @csrf
                <div class="buy-product-count">
                    <div>
                        <button class="but_count" type="button" id="down-buy-product-count">-</button>
                    </div>
                    <input value="1" class="buy-product-count-input" type="number" name="productCount" min=1
                           id="buy-product-count">
                    <div>
                        <button class="but_count" type="button" id="up-buy-product-count">+</button>
                    </div>
                </div>
                <div class="buy-product-price" id="buy-product-price">
                    {{$buyProduct->productPrice}} $
                </div>
                <div>
                    <button class="but_count sub_count mt-2" type="submit">Buy</button>
                </div>
            </form>
        </div>
        <div class="containeraaaa">
            <section class="card" id="card">
                <div class="front">
                    <div class="brand-logo" id="brand-logo">
                    </div>
                    <img src="https://raw.githubusercontent.com/falconmasters/formulario-tarjeta-credito-3d/master/img/chip-tarjeta.png" class="chip">
                    <div class="details">
                        <div class="group" id="number">
                            <p class="label">Card Number</p>
                            <p class="number">#### #### #### ####</p>
                        </div>
                        <div class="flexbox">
                            <div class="group" id="name">
                                <p class="label"> Card's Holder </p>
                                <p class="name">Name</p>
                            </div>
                            <div class="group" id="expiration">
                                <p class="label">Expiration</p>
                                <p class="expiration"><span class="month">MM</span> / <span class="year">YY</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div class="magnetic-bar"></div>
                    <div class="details">
                        <div class="group" id="signature">
                            <p class="label">Signature</p>
                            <div class="signature">
                                <p></p>
                            </div>
                        </div>
                        <div class="group" id="ccv">
                            <p class="label">CCV</p>
                            <p class="ccv"></p>
                        </div>
                    </div>
                    <p class="legend">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda dicta quos
                        quas porro
                        fuga, accusamus necessitatibus expedita illo, ipsum blanditiis quaerat deserunt illum minima ex
                        distinctio veritatis aliquid, ipsam ut.</p>
                    <a href="#" class="bank-link">http://dabank.onion</a>
                </div>
            </section>
            <div class="container-btn">
                <button class="btn-open-form" id="btn-open-form">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <form action="{{route("addCreditCard")}}" id="card-form" class="card-form" method="post">
                @csrf
                <div class="group">
                    <label for="inputNumber">Card Number</label>
                    <input name="cartNumber" type="text" id="inputNumber" maxlength="19" autocomplete="off">
                </div>
                <div class="group">
                    <label for="inputHolder">Card's Holder Name</label>
                    <input type="text" id="inputHolder" maxlength="19" autocomplete="off">
                </div>
                <div class="flexbox">
                    <div class="group expire">
                        <label for="selectMonth">Expiration</label>
                        <div class="flexbox">
                            <div class="group-select">
                                <select name="month" id="selectMonth">
                                    <option disabled selected> Month</option>
                                </select>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div class="group-select">
                                <select name="year" id="selectYear">
                                    <option disabled selected> Year</option>
                                </select>
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="group ccv">
                        <label for="inputCCV">CVV</label>
                        <input name='CVC' type="text" id="inputCCV" maxlength="3">
                    </div>
                </div>
                <button type="submit" class="btn-submit"> Submit</button>
            </form>
            <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
            <script src="app.js"></script>
            @if($creditCard)
                <div class="your-cards-container">
                    Your Cards: {{$creditCard->cartNumber}}
                </div>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        const card = document.querySelector('#card'),
            btnOpenForm = document.querySelector('#btn-open-form'),
            form = document.querySelector('#card-form'),
            cardNumber = document.querySelector('#card .number'),
            cardName = document.querySelector('#card .name'),
            brandLogo = document.querySelector('#brand-logo'),
            signature = document.querySelector('#card .signature p'),
            monthExpDate = document.querySelector('#card .month'),
            yearExpDate = document.querySelector('#card .year');
        ccv = document.querySelector('#card .ccv');

        // * Flip the card to show the front and vice versa.
        const flipCard = () => {
            if (card.classList.contains('active')) {
                card.classList.remove('active');
            }
        }

        // * Card rotation
        card.addEventListener('click', () => {
            card.classList.toggle('active');
        });


        // * Button to open the form
        btnOpenForm.addEventListener('click', () => {
            btnOpenForm.classList.toggle('active');
            form.classList.toggle('active');
        });

        // * Select month dinamically.
        for (let i = 1; i <= 12; i++) {
            let option = document.createElement('option');
            option.value = i;
            option.innerText = i;
            form.selectMonth.appendChild(option);
        }

        // * Select year dinamically.
        const currentYear = new Date().getFullYear();
        for (let i = currentYear; i <= currentYear + 8; i++) {
            let option = document.createElement('option');
            option.value = i;
            option.innerText = i;
            form.selectYear.appendChild(option);
        }


        form.inputNumber.addEventListener('keyup', (e) => {
            let inputValue = e.target.value;

            form.inputNumber.value = inputValue
                // Reject Spaces
                .replace(/\s/g, '')
                // Reject letters
                .replace(/\D/g, '')
                // Place an space each four numbers
                .replace(/([0-9]{4})/g, '$1 ')
                // Delete the last space
                .trim();

            cardNumber.textContent = inputValue;

            if (inputValue == '') {
                cardNumber.textContent = '#### #### #### ####';

                brandLogo.innerHTML = '';
            }

            if (inputValue[0] == 4) {
                brandLogo.innerHTML = '';
                const image = document.createElement('img');
                image.src = 'https://raw.githubusercontent.com/falconmasters/formulario-tarjeta-credito-3d/master/img/logos/visa.png';
                brandLogo.appendChild(image);
            } else if (inputValue[0] == 5) {
                brandLogo.innerHTML = '';
                const image = document.createElement('img');
                image.src = 'https://raw.githubusercontent.com/falconmasters/formulario-tarjeta-credito-3d/master/img/logos/mastercard.png';
                brandLogo.appendChild(image);
            }

            // Card is flipped to the front to be shown to the user
            flipCard();
        });


        // * Input Card Holder's Name
        form.inputHolder.addEventListener('keyup', (e) => {
            let inputValue = e.target.value;

            form.inputHolder.value = inputValue.replace(/[0-9]/g, '');
            cardName.textContent = inputValue;
            signature.textContent = inputValue;

            if (inputValue == '') {
                cardName.textContent = 'Name';
            }

            flipCard();
        });

        // * Select Month
        form.selectMonth.addEventListener('change', (e) => {
            monthExpDate.textContent = e.target.value;
            flipCard();
        });

        // * Select Year
        form.selectYear.addEventListener('change', (e) => {
            yearExpDate.textContent = e.target.value.slice(2);
            flipCard();
        });


        // * CCV
        form.inputCCV.addEventListener('keyup', () => {
            if (!card.classList.contains('active')) {
                card.classList.toggle('active');
            }

            form.inputCCV.value = form.inputCCV.value
                // Reject Spaces
                .replace(/\s/g, '')
                // Reject letters
                .replace(/\D/g, '');

            ccv.textContent = form.inputCCV.value;
        });


        $('#buy-product-count').on('keyup', (e) => {
            if (!e.target.value > 0 && e.target.value) {
                e.target.value = 1;
            }

            $('#buy-product-price').text(e.target.value * {{$buyProduct->productPrice}});
        })

        $('#up-buy-product-count').on('click', (e) => {
            let count = $('#buy-product-count').val();

            if (count > 0 && count) {
                count++;
                console.log(count);
                $('#buy-product-count').val(count);
                $('#buy-product-price').text(count * {{$buyProduct->productPrice}});

            }

        })

        $('#down-buy-product-count').on('click', (e) => {
            let count = $('#buy-product-count').val();

            if (count > 1 && count) {
                count--;
                console.log(count);
                $('#buy-product-count').val(count);
                $('#buy-product-price').text(count * {{$buyProduct->productPrice}});
            }

        })


    </script>
@endsection
