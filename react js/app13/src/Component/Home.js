import { CommonData } from "./CommonContex";
function Home(){
    return <>
        <CommonData.Consumer>
            {
                (theme) => <>
                    <h1 style={{backgroundColor:theme.bg, color: theme.fg}}>Home Component</h1>
                </>
            }
        </CommonData.Consumer>
    </>
}   

export default Home;