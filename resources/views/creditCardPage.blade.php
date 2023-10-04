@extends("layouts.app")

@section("content")
    <link rel="stylesheet" href="{{asset("css/creditCardPage_style.css")}}">
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
                    <input value="1" class="buy-product-count-input" type="number" name="soldProductCount" min=1
                           id="buy-product-count">
                    <div>
                        <button class="but_count" type="button" id="up-buy-product-count">+</button>
                    </div>
                </div>
                <div class="buy-product-price" id="buy-product-price">
                    {{$buyProduct->productPrice}}
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
                $('#buy-product-count').val(count);
                $('#buy-product-price').text(count * {{$buyProduct->productPrice}});
            }

        })
    </script>
@endsection
