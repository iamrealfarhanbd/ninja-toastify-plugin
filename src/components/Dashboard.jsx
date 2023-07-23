import React from "react";
import { Col, Container, Row } from "react-bootstrap";
import Card from "react-bootstrap/Card";

/*
 * This componet will render the plugin dashboard
 */
const Dashboard = () => {
  // this function return the toastify for demo
  const ntfy_btn = () => {
    Toastify({
      text: `Thank You for using Ninja Toastify!`,
      duration: 5000,
      destination: "https://www.buymeacoffee.com/iamfarhan",
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: "right", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "linear-gradient(to right, #ff416c, #0094FF)",
      },
      callback: function () {
        window.location.href =
          "https://github.com/iamrealfarhanbd/wp-react-tostify-plugin ";
      },
      onClick: function () {}, // Callback after click
    }).showToast();
  };
  const ntfy_btn_copied = () => {
        var textToCopy = "Click To Copy";
        var dummyElement = document.createElement("textarea");
        dummyElement.value = textToCopy;
        document.body.appendChild(dummyElement);
        dummyElement.select();
        document.execCommand("copy");
        document.body.removeChild(dummyElement);

    Toastify({
      text: `Thank You for using Ninja Toastify!`,
      duration: 5000,
      destination: "https://www.buymeacoffee.com/iamfarhan",
      newWindow: true,
      close: true,
      gravity: "top", // `top` or `bottom`
      position: "right", // `left`, `center` or `right`
      stopOnFocus: true, // Prevents dismissing of toast on hover
      style: {
        background: "linear-gradient(to right, #ff4b2b, #102C3B)",
      },
      callback: function () {
        window.location.href =
          "https://github.com/iamrealfarhanbd/wp-react-tostify-plugin ";
      },
      onClick: function () {}, // Callback after click
    }).showToast();
  };
  return (
		<Container id="ntfy_dashboard">
			<section className="ntfy_section">
				<Card.Text as="h6" className="mb-3">
					You can customize the shortcode by using the below attributes:
				</Card.Text>
				<div className="ntfy_div">
					<ul>
						<li>id: ntfy_toast </li> <li>button_name: Try me!!</li>
						<li>message: Thank You for using Ninja Toastify!</li>
						<li>duration: 5000</li>
						<li>gravity: top</li> <li>position: right</li>
					</ul>
					<ul>
						<li>background: linear-gradient(to right, #ff416c, #ff4b2b)</li>
						<li>button_font_size: 14px</li>
						<li>button_background: #3dd28d</li>
						<li>button_color: white</li> <li>button_padding: 4px 20px</li>
						<li>
							destination_url:
							https://github.com/iamrealfarhanbd/wp-react-tostify-plugin
						</li>
					</ul>
				</div>
			</section>
			<Row>
				<Col>
					<Card border="warning" className="p-0 mw-100">
						<Card.Header
							as="h5"
							className="text-center text-white"
							style={{ background: "#102C3B" }}
						>
							Demo
						</Card.Header>
						<Card.Body>
							<Card.Text>
								<p>Click the button below to see the toast message:</p>
								<a
									id="my-toast"
									className="button"
									onClick={() => ntfy_btn()}
									style={{
										fontSize: "14px",
										background:
											"linear-gradient(to right, rgb(16 44 60), rgb(0, 148, 255))",
										padding: "4px 20px",
										color: "#FFFFFF",
										borderRadius: "36px",
										textDecoration: "none",
										width: "20%",
										textAlign: " center",
									}}
								>
									Try me!!
								</a>
							</Card.Text>
							<strong>Shortcode:</strong>
							<br />
							<code>
								[ninja_toastify id="ntfy_toast" button_name="Try me!!"
								destination_url="https://github.com/iamrealfarhanbd/wp-react-tostify-plugin"
								message="Thank You for using Ninja Toastify! click me now"
								duration="5000" gravity="top" position="right"
								background="llinear-gradient(to right, rgb(16 44 60), rgb(0,
								148, 255))" button_font_size="14px"
								button_background="linear-gradient(to right, rgb(16 44 60),
								rgb(0, 148, 255))" button_color="#FFFFFF" button_padding="10px
								20px"]
							</code>
						</Card.Body>
					</Card>
				</Col>
				<Col>
					<Card border="warning" className="p-0 mw-100 ">
						<Card.Header
							as="h5"
							className="text-center text-white"
							style={{ background: "#102C3B" }}
						>
							Demo
						</Card.Header>
						<Card.Body>
							<Card.Text>
								<p>Click the button below to see the toast message:</p>
								<a
									id="my-toast"
									className="button"
									onClick={() => ntfy_btn_copied()}
									style={{
										fontSize: "14px",
										background:
											"linear-gradient(to right, rgb(16 44 60), rgb(0, 148, 255))",
										padding: "4px 20px",
										color: "#FFFFFF",
										borderRadius: "36px",
										textDecoration: "none",
										textAlign: " center",
										border: 0,
									}}
								>
									Click To Copy
								</a>
							</Card.Text>
							<strong>Shortcode:</strong>
							<br />
							<code>
								[ninja_toastify_copied] Click To Copy [/ninja_toastify_copied]
							</code>
						</Card.Body>
					</Card>
				</Col>
			</Row>
		</Container>
	);
};

export default Dashboard;
