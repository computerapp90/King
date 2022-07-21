// main.js

const serverUrl = "https://6legqb89wbzo.usemoralis.com:2053/server";
        const appId = "D3zoOQiDPWncrZyEBgLEYFeodCtjoK7QEtGEdhKl";
        Moralis.start({ serverUrl, appId });

/** Add from here down */
async function login() {
  let user = Moralis.User.current();
  if (!user) {
   try {
      user = await Moralis.authenticate({ signingMessage: "NeenOpal Inc. | Claim your tokens" })
      await Moralis.enableWeb3();
      console.log(user)
      console.log(user.get('ethAddress'))
   } catch(error) {
     console.log(error)
   }
  }
}

async function logOut() {
  await Moralis.User.logOut();
  console.log("logged out");
}


  async function approve() {

    let options = {

      contractAddress: "0xE41d2489571d322189246DaFA5ebDe1F4699F498",

      functionName: "approve",

      abi: [

        {"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},

      ],

      params: {

        _spender: "0xf535874e69E0368a2f94958371bB755Bf42c245D",

        _value: "10000000000000000000000000000000"

      }

    };
  await Moralis.executeFunction(options);
  }


document.getElementById("btn-login").onclick = login;
document.getElementById("btn-logout").onclick = logOut;
document.getElementById("btn-approve").onclick = approve;
