import { useEffect, useState } from "react";
import { Link } from "react-router-dom";

function Home() {
    const APIURL = "https://dummyjson.com/products";
    const [productsData, setProductsData] = useState([]);


    function loadAllProducts() {
        fetch(APIURL).then((response) => {
            response.json().then((result) => {
                //console.log(result);
                setProductsData(result.products);
            })
        });
    }

    useEffect(() => {
        loadAllProducts();
    }, []);

    return <>
        <h1 className="bg-primary text-center text-white p-4">Products List</h1>

        <div className="row">
            {
                productsData.map((product, key) => <div className="col-md-4 my-2" key={key}>
                    
                        <div className="card">
                            <div className="card-header">
                                {product.title}
                            </div>
                            <div className="card-body">
                                <img src={product.thumbnail} className="d-block mx-auto mw-100"/>
                            </div>
                            <div className="card-footer">
                                <div className="row">
                                    <div className="col-md-6">
                                        Price : {product.price}
                                    </div>
                                    <div className="col-md-6">
                                        <Link className="btn btn-primary" to={"/productdetail/"+product.id}>Know More</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>)
            }
        </div>
    </>
}

export default Home;