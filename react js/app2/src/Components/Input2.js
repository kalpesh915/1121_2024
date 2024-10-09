import { useState } from "react";

function Input2(){
    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");
    return <>
        <h1>Input Example</h1>
        <input type="text" onChange={(e)=>setFname(e.target.value)} placeholder="Enter First Name"></input><br></br>
        <input type="text" onChange={(e)=>setLname(e.target.value)} placeholder="Enter Last Name"></input><br></br>
        <p>Welcome {fname} {lname}</p>
    </>
}

export default Input2;