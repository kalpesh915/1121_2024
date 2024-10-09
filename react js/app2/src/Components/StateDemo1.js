import { useState } from "react";

function StateDemo1(){
    let [count, setCount] = useState(1); // Hook
    return <>
        <h1>State Demo Value of Count is {count}</h1>
        <button onClick={()=>setCount(count+1)}>Update</button>
    </>
}

export default StateDemo1;