<x-layout>
    <!-- SEZIONE LOGIN/Register -->
    <div style="display: flex; justify-content-center; height: 110vh;">

        <div
            style="height: 100%; display: flex; justify-content: center;align-items: center;">

            <div id="divLogin"
                style="width: 100%; height: 100%; background-color: transparent; display: none;align-items: center; justify-content: center;">
                <div>
                    <h3 style="font-weight: 800; text-align: center;">Accesso</h3>
                    <div
                        style="width: 300px; background-color: black; height: 35px;border-radius: 35px; display: flex;flex-direction: row;margin-top: 5px;">
                        <div id="btnLogin" onclick="toggleLogin()"
                            style="flex:1;background-color: white;display: flex;align-items: center; justify-content: center;border-radius: 35px;border: 1px solid black; cursor: pointer;">
                            <h5 id="textBtnLogin" style="text-align: center;font-size: 14px;">Login</h5>
                        </div>
                        <div id="btnRegistrazione" onclick="toggleRegistrazione()"
                            style="flex:1;background-color: black;display: flex;align-items: center; justify-content: center;border-radius: 35px;cursor: pointer;">
                            <h5 id="textBtnRegistrazione" style="text-align: center; font-size: 14px; color: white;">
                                Signup</h5>
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 15px;">
                        <p style="font-size: 13px;">Username</p>
                        <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px;">
                            <input placeholder="Username" id="inputUsername" type="text"
                                style="font-size: 12px; margin-left: 8px ;width: 100%; height: 100%; border: none; background-color: transparent;">
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 15px;">
                        <p style="font-size: 13px;">Password</p>
                        <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                            <input placeholder="Password" id="inputPassword" type="password"
                                style="font-size: 12px; margin-left: 8px ;width: 100%; height: 100%; border: none; background-color: transparent;">
                        </div>
                    </div>
                    <button
                        style="width: 100%;height: 40px;background-color: black; color: white; border-radius: 35px;border: 2px solid black ;padding-left: 9px;margin-top: 25px; font-size: 13px;cursor: pointer;"
                        class="btnRegistrati" onclick="loginEmail()">Login</button>
                    <p id="erroreLoginP"
                        style="display: none; color: red; position: absolute;margin-top: 10px; font-size: 17px;">Le
                        credenziali sono errate</p>
                </div>
            </div>
            <div id="divRegistrazione"
                style="width: 100%; height: 100%; background-color: transparent; display: none;align-items: center; justify-content: center;">
                <div>
                    <h3 style="font-weight: 800; text-align: center;">Registrazione</h3>
                    <div
                        style="width: 300px; background-color: black; height: 35px;border-radius: 35px; display: flex;flex-direction: row;margin-top: 5px;">
                        <div id="btnLogin" onclick="toggleLogin()"
                            style="flex:1;background-color: white;display: flex;align-items: center; justify-content: center;border-radius: 35px;border: 1px solid black; cursor: pointer;">
                            <h5 id="textBtnLogin" style="text-align: center;font-size: 14px;">Login</h5>
                        </div>
                        <div id="btnRegistrazione" onclick="toggleRegistrazione()"
                            style="flex:1;background-color: black;display: flex;align-items: center; justify-content: center;border-radius: 35px;cursor: pointer;">
                            <h5 id="textBtnRegistrazione" style="text-align: center; font-size: 14px; color: white;">
                                Signup</h5>
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 35px;">
                        <p style="font-size: 13px;">Nome</p>
                        <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                            <input placeholder="Nome" id="inputNomeRegistrazione" type="text"
                                style="font-size: 12px; margin-left: 8px ;width: 100%; height: 100%; border: none; background-color: transparent;">
                        </div>
                        <div style="width: 100%; margin-top: 15px;">
                            <p style="font-size: 13px;">Email</p>
                            <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px;">
                                <input placeholder="Email" id="inputEmailRegistrazione" type="text"
                                    style="font-size: 12px; margin-left: 8px ;width: 100%; height: 100%; border: none; background-color: transparent;">
                            </div>
                        </div>
                        <div style="width: 100%; margin-top: 15px;">
                            <p style="font-size: 13px;">Password</p>
                            <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                                <input placeholder="Password" id="inputPasswordRegistrazione" type="password"
                                    style="font-size: 12px; margin-left: 8px ;width: 100%; height: 100%; border: none; background-color: transparent;">
                            </div>
                        </div>
                        <div style="width: 100%; margin-top: 15px;">
                            <p style="font-size: 13px;">Conferma Password</p>
                            <div style="width: 100%; border: 2px solid black; height: 35px; border-radius:30px">
                                <input placeholder="Password" id="inputConfermaPasswordRegistrazione" type="password"
                                    style="font-size: 12px; margin-left: 8px ;width: 100%; height: 100%; border: none; background-color: transparent;">
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
