import { useState } from "react";

function Input6(){
    let [userData, setUserData] = useState({fname:"", lname:"", city:"", email:"", phone:""});

    function handleSubmit(e){
        e.preventDefault();
        console.log(userData);
    }

    function handleInput(e){
        // console.log(e.target);
        let {name, value} = e.target;
        setUserData(previousData =>({
            ...previousData, 
            [name]:value
        }));
    }

    return <>
        <h1>Example of Form Handling in React JS</h1>
        <form onSubmit={handleSubmit}>
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" onChange={handleInput} value={userData.fname}></input> <br />
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" onChange={handleInput} value={userData.lname}></input> <br />
            <input type="text" name="city" id="city" placeholder="Enter City Name" onChange={handleInput} value={userData.city}></input> <br />
            <input type="email" name="email" id="email" placeholder="Enter Email Address" onChange={handleInput} value={userData.email}></input> <br />
            <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" onChange={handleInput} value={userData.phone}></input> <br />
            <input type="submit" value="Send Data"></input>
        </form>
    </>
}

export default Input6;