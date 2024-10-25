import { CommonData } from "./CommonContex";
function Service(){
    return <>
        <CommonData.Consumer>
            {
                (theme) => <>
                    <h1 style={{backgroundColor:theme.bg, color: theme.fg}}>SERVICES Component</h1>
                </>
            }
        </CommonData.Consumer>
    </>
}   

export default Service;