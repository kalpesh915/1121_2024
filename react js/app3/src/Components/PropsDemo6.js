import { useState } from "react";

function PropsDemo6(Props){
    let [userdata] = useState("Khushbu Kaneriya");
    return <>
        <h1>Example of Pass Function as Props</h1>
        {/* <button onClick={()=>Props.greetings("Khushbu Kaneriya")}>Click Me</button> */}
        <button onClick={()=>Props.greetings(userdata)}>Click Me</button>
    </>
}
export default PropsDemo6;