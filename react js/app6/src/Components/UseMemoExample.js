import { useMemo, useState } from "react";

function UseMemoExample() {
    let [counter1, setCounter1] = useState(1);
    let [counter2, setCounter2] = useState(1);

    useMemo(() => {
        console.log("Counter 1 is Updated");
    }, [counter1]);

    useMemo(() => {
        console.log("Counter 2 is Updated");
    }, [counter2]);

    return <>
        <h1>Example of Use Memo in React JS</h1>
        <h1>Counter 1 is {counter1} and 2 is {counter2}</h1>
        {/* <button onClick={()=>setCounter1(counter1+1)}>Update 1</button>
        <button onClick={()=>setCounter2(counter2+1)}>Update 2</button> */}

        {/* <button onClick={() => setCounter1(1)}>Update 1</button>
        <button onClick={() => setCounter2(1)}>Update 2</button> */}

        <button onClick={() => setCounter1(Math.ceil(Math.random() * 10))}>Update 1</button>
        <button onClick={() => setCounter2(Math.ceil(Math.random() * 10))}>Update 2</button>
    </>
}

export default UseMemoExample;