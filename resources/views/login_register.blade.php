<x-layout>
    <!-- SEZIONE LOGIN/Register -->
    <div style=" justify-content-center; height: 110vh; width:100%;">

        <div
            style="height: 100%; display: flex; justify-content: center;align-items: center;">

            <div id="divLogin">
                <div>
                    <h3>Accedi</h3>
                    <div
                        style="width: 300px; background-color: black; height: 35px;border-radius: 25px; display: flex;flex-direction: row;margin-top: 5px;">
                        <div id="btnLogin" onclick="toggleLogin()">
                            <h5 id="textBtnLogin" style="text-align: center;font-size: 14px;">Login</h5>
                        </div>
                        <div id="btnRegistrazione" onclick="toggleRegistrazione()">
                            <h5 id="textBtnRegistrazione">Registrati</h5>
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 15px;">
                        <p style="font-size: 13px;">Username</p>
                        <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px;">
                            <input placeholder="Username" id="inputUsername" type="text">
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 15px;">
                        <p style="font-size: 13px;">Password</p>
                        <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                            <input placeholder="Password" id="inputPassword" type="password">
                        </div>
                    </div>
                    <button class="btnRegistrati" onclick="loginEmail()">Login</button>
                    <p id="erroreLoginP">Le
                        credenziali sono errate</p>
                </div>
            </div>
            <div id="divRegistrazione">
                <div>
                    <h3 style="font-weight: 800; text-align: center;">Registrazione</h3>
                    <div
                        style="width: 300px; background-color: black; height: 35px;border-radius: 35px; display: flex;flex-direction: row;margin-top: 5px;">
                        <div id="btnLogin" onclick="toggleLogin()">
                            <h5 id="textBtnLogin" style="text-align: center;font-size: 14px;">Login</h5>
                        </div>
                        <div id="btnRegistrazione" onclick="toggleRegistrazione()">
                            <h5 id="textBtnRegistrazione" style="text-align: center; font-size: 14px; color: white;">
                                Registrati</h5>
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 35px;">
                        <p style="font-size: 13px;">Nome</p>
                        <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                            <input placeholder="Nome" id="inputNomeRegistrazione" type="text">
                        </div>
                        <div style="width: 100%; margin-top: 15px;">
                            <p style="font-size: 13px;">Email</p>
                            <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px;">
                                <input placeholder="Email" id="inputEmailRegistrazione" type="text">
                            </div>
                        </div>
                        <div style="width: 100%; margin-top: 15px;">
                            <p style="font-size: 13px;">Password</p>
                            <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                                <input placeholder="Password" id="inputPasswordRegistrazione" type="password">
                            </div>
                        </div>
                        <div style="width: 100%; margin-top: 15px;">
                            <p style="font-size: 13px;">Conferma Password</p>
                            <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                                <input placeholder="Password" id="inputConfermaPasswordRegistrazione" type="password">
                            </div>
                        </div>
                        <button
                            style="width: 100%;height: 40px;background-color: black; color: white; border-radius: 35px;border: 2px solid black ;padding-left: 9px;margin-top: 25px; font-size: 13px;cursor: pointer;"
                            class="btnRegistrati">Registrati</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Section/Register -->
</x-layout>
