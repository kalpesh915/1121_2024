import mystyle from './style3.module.css';

function Styledemo3(){
    return <>
        <p>Example of module.CSS File</p>
        <div className={mystyle.mydiv}>    
            <h1 className={mystyle.heading}>Welcome to CSS with React JS</h1>
        </div>
    </>
}

export default Styledemo3;