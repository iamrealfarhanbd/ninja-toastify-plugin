import React from 'react'
import { Col, Container, Row } from 'react-bootstrap';
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import Toastify from 'toastify-js'
import "toastify-js/src/toastify.css"
import CardGroup from 'react-bootstrap/CardGroup';

const Dashboard = () => {
   const wprt_btn = ()=>{
    Toastify({
        text: "Hello farhan!!!",
        duration: 5000,
        destination: "https://github.com/apvarun/toastify-js",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "linear-gradient(to right, #ff416c, #ff4b2b)",
        },
        onClick: function(){} // Callback after click
      }).showToast();
    }        
    return (
        <Container>
        <Row >
            <Col>
      <Card border="primary" className='p-0'>
            <Card.Header as="h5" className='text-center'>
                Demo 
            </Card.Header>
            <Card.Body>
                    <Card.Text>
                        <p>Click the button below to see the toast message:</p>
                     
                        <a id="my-toast" className="button" onClick={() => wprt_btn()} style={{fontSize:"14px", background: "red" ,padding: '4px 20px',color: "white",textDecoration: "none"}}>Try me!!</a>
                        <br/>
                        <br/>
                        <Card.Text as="h6">You can customize the shortcode by changing the below attributes:</Card.Text>
                                <b>id: my-toast </b> ,
                                <b>button_name: Try me!!</b> ,
                                <b>message: Hello farhan!!!</b> ,
                                <b>duration: 5000</b> ,
                                <b>gravity: top</b> ,
                                <b>position: right</b> ,
                                <b>background: linear-gradient(to right, #ff416c, #ff4b2b)</b> 
                                <b>button_font_size: 14px</b> ,
                                <b>button_background: red</b> 
                                <b>button_color: white</b> ,
                                <b>button_padding: 4px 20px</b> 
                                <br/>
                                <br/>
                        <strong>Shortcode:</strong>
                         <br/>
                         <code>[wp_react_toastify id="my-toast" button_name="Try me!!" message="Hello farhan!!!" duration="5000" gravity="top" position="right" background="linear-gradient(to right, #ff416c, #ff4b2b)" button_font_size="14px" button_background="red" button_color="white" button_padding="14px 20px"]</code>
                    </Card.Text>
            </Card.Body>
            </Card>
            </Col>
        </Row>
      </Container>
     );
}

export default Dashboard;