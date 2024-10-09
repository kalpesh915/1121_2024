import { useState } from "react";

function Input5() {
    let [userData, setUserData] = useState({fname:"", lname:""});

    function handleSubmit(e){
        e.preventDefault();
        setUserData({fname: e.target.fname.value, lname:e.target.lname.value});
    }
    return <>
        <h1>Input Example</h1>
        <form onSubmit={handleSubmit}>
            <input type="text" id="fname" name="fname" placeholder="Enter First Name" ></input><br></br>
            <input type="text" id="lname" name="lname" placeholder="Enter Last Name" ></input><br></br>
            <input type="submit" value="Send Data"></input>
        </form>
        <p>Welcome {userData.fname} {userData.lname}</p>

    </>
}

export default Input5;