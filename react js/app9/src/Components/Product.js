import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";

function Product(){
    const [productData, setProductData] = useState({});
    const [tags, setTags] = useState([]);
    const [dimensions, setDimensions] = useState({});
    const [reviews, setReviews] = useState([]);

    let {id} = useParams();
    const APIURL = "https://dummyjson.com/products";

    useEffect(()=>{
        getProductDetais();
    });

    function getProductDetais(){
        fetch(APIURL+"/"+id).then((response)=>{
            response.json().then((result)=>{
                //console.log(result);
                setProductData(result);
                setTags(result.tags);
                setDimensions(result.dimensions);
                setReviews(result.reviews);
            });
        })
    }

    return <>
        {/* <h1>Product Details {id}</h1> */}
        <div className="container-fluid">
            <h1 className="bg-primary text-white p-2 text-center">
                {productData.title}
            </h1>

            <div className="row my-5">
                <div className="col-md-6">
                    <img src={productData.thumbnail} className="mx-auto d-block w-100"/>
                </div>
                <div className="col-md-6">
                    <h1>Price {productData.price}</h1>
                    <hr/>
                    <p><strong>Description: </strong> {productData.description}</p>
                    <p><strong>Discount: </strong> {productData.discountPercentage}</p>
                    <p><strong>Rating: </strong> {productData.rating}</p>
                    <p><strong>Stock: </strong> {productData.stock}</p>
                    <p><strong>Brand: </strong> {productData.brand}</p>
                    <p><strong>Category: </strong> {tags[0]} / {tags[1]}</p>

                    <hr/>
                    <p><strong>Dimention: </strong> {dimensions.width} x {dimensions.height} x {dimensions.depth}</p>
                    <p><strong>Warranty: </strong> {productData.warrantyInformation}</p>
                    <p><strong>Shipping: </strong> {productData.shippingInformation}</p>
                    <p><strong>Availablity: </strong> {productData.availabilityStatus}</p>
                    <p><strong>Return Policy </strong> {productData.returnPolicy}</p>
                    <p><strong>Minimum Order: </strong> {productData.minimumOrderQuantity}</p>
                </div>
            </div>

            <div className="row my-5">
                {
                    reviews.map((review) => <div className="col-md-4">
                        <div className="card">
                            <div className="card-header">
                                {review.reviewerName} <strong>({review.reviewerEmail}</strong>)
                            </div>
                            <div className="card-body">
                                {review.comment}
                            </div>
                            <div className="card-footer">
                                {review.date}
                            </div>
                        </div>
                    </div>)
                }
            </div>
        </div>
    </>
}

export default Product;