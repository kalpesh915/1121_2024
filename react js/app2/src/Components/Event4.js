function Event4(){
    let count = 1;
    function updateCount(){
        console.log(count);
        count++;
    }
    return <>
        <h1>Example of Variable Count is {count}</h1>
        <button onClick={()=>updateCount()}>Click Me</button>
    </>
}

export default Event4;