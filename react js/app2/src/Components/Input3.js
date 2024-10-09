import { useState } from "react";

function Input3(){
    let [fname, setFname] = useState("Demo");
    let [lname, setLname] = useState("User");
    return <>
        <h1>Input Example</h1>
        <input type="text" onChange={(e)=>setFname(e.target.value)} placeholder="Enter First Name" value={fname}></input><br></br>
        <input type="text" onChange={(e)=>setLname(e.target.value)} placeholder="Enter Last Name" value={lname}></input><br></br>
        <p>Welcome {fname} {lname}</p>
    </>
}

export default Input3;