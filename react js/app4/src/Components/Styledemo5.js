import { Alert, Button } from 'react-bootstrap';

function Styledemo5(){
    return <>
        <p className='lead text-center'>Example of Simple bootstrap</p>
        <div className='bg-primary text-center text-white p-5'>    
            <h1>Welcome to CSS with React JS</h1>
            {/* <button className='btn btn-danger'>Click Me</button> */}
            <Button variant='danger'>Click Me</Button>
        </div>

        <Alert variant='success'>
            <p>lorem ipsum error page</p>
        </Alert>
    </>
}

export default Styledemo5;