import { useEffect, useState } from "react";

function HooksDemo2(){
    let [counter1, setCounter1] = useState(1);
    let [counter2, setCounter2] = useState(2);

    useEffect(()=>{
        console.log("Function 1 is Called");
    });

    useEffect(()=>{
        console.log("Function 2 is Called");
    });

    return <>
        <h1>Hooks Demo</h1>
        <h1>Counter 1 is {counter1} and Counter 2 is {counter2}</h1>
        <button onClick={()=>setCounter1(counter1+1)}>Update Counter 1</button>
        <button onClick={()=>setCounter2(counter2+1)}>Update Counter 2</button>
    </>
}

export default HooksDemo2;