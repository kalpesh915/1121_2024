import { useState } from "react";

function ControlledComponet() {

    let [fname, setFname] = useState("");
    let [lname, setLname] = useState("");

    function handleSubmit(e) {
        e.preventDefault();
        console.log("Welcome", fname, lname);
    }

    return <>
        <form onSubmit={handleSubmit}>
            <input type="text" name="fname" id="fname" required placeholder="Enter First Name" onInput={(e) => setFname(e.target.value)} /> <br />
            <input type="text" name="lname" id="lname" required placeholder="Enter Last Name" onInput={(e) => setLname(e.target.value)} /> <br />
            <input type="submit" value="Send Data"></input>
        </form>
    </>
}

export default ControlledComponet;