import { useState } from "react";

function Input4() {
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");

    function handleSubmit(e){
        e.preventDefault();
        setFname(e.target.fname.value);
        setLname(e.target.lname.value);
    }
    return <>
        <h1>Input Example</h1>
        <form onSubmit={handleSubmit}>
            <input type="text" id="fname" name="fname" placeholder="Enter First Name" ></input><br></br>
            <input type="text" id="lname" name="lname" placeholder="Enter Last Name" ></input><br></br>
            <input type="submit" value="Send Data"></input>
        </form>
        <p>Welcome {fname} {lname}</p>

    </>
}

export default Input4;