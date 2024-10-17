import { useParams } from "react-router-dom";

function Greetings(){
    const {id, fname, lname} = useParams();
    return <>
        <h1>Greetings Components</h1>
        <p>Welcome {fname} {lname} your User ID is {id}</p>
    </>
}

export default Greetings;