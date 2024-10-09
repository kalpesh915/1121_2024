import { useState } from "react";

function Input1(){
    let [fname, setFname] = useState("");
    return <>
        <h1>Input Example</h1>
        <input type="text" onChange={(e)=>setFname(e.target.value)}></input>
        <p>Welcome {fname}</p>
    </>
}

export default Input1;