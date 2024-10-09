function Event1(){
    function greetings(){
        alert("Welcome to world of React JS");
    }
    return <>
        <h1>Example of Event</h1>
        <button onClick={greetings}>Click Me</button>
    </>
}

export default Event1;