+++
# A Demo section created with the Blank widget.
# Any elements can be added in the body: https://sourcethemes.com/academic/docs/writing-markdown-latex/
# Add more sections by duplicating this file and customizing to your requirements.

widget = "blank"  # See https://sourcethemes.com/academic/docs/page-builder/
headless = true  # This file represents a page section.
active = true  # Activate this widget? true/false
weight = 15  # Order that this section will appear.

title = "Research topics"
subtitle = ""

[design]
  # Choose how many columns the section has. Valid values: 1 or 2.
  columns = "1"

[design.background]
  # Apply a background color, gradient, or image.
  #   Uncomment (by removing `#`) an option to apply it.
  #   Choose a light or dark text color by setting `text_color_light`.
  #   Any HTML color name or Hex value is valid.

  # Background color.
  # color = "navy"
  
  # Background gradient.
  gradient_start = "DarkGreen"
  gradient_end = "ForestGreen"
  
  # Background image.
  # image = "image.jpg"  # Name of image in `static/img/`.
  # image_darken = 0.6  # Darken the image? Range 0-1 where 0 is transparent and 1 is opaque.

  # Text color (true=light or false=dark).
  text_color_light = true

[design.spacing]
  # Customize the section spacing. Order is top, right, bottom, left.
  padding = ["20px", "0", "20px", "0"]

[advanced]
 # Custom CSS. 
 css_style = ""
 
 # CSS class.
 css_class = ""
+++



{{< figure library="1" src="test.jpg" >}}

## Model-based Testing (timed systems, web services, rich client applications), testability

* Validation (model-based testing), test of an implementation with respect to its specification. This step is well known and used with critical systems for 30 years and is more and more considered in software development companies with the need of software quality and the introduction of quality models like CMMI.

* Conformance and robustness testing of timed systems, tools for test case generation, test architecture for WAP-based devices.

* Web service and service composition testing (conformance, robustness, security), in classical environments or partially open ones e.g., Clouds.

* Security testing of Mobile applications,

* Testability

Some Problematics:

* Test coverage
* Check the satisfiability of timed constraints
* Test costs reduction
* Testing specific systems like web services, rich client applications (Ajax,silverlight)
* Automatic testing with good coverage

## Model Inference

We studied: 
* Model generation of (formal) models from trace sets : combination of different approaches, Expert systems, Data mining, Machine Learning, Model transformations (collaboration with the industrial partner Michelin).

* Model generation from Android applications : combination of a test engine for apps exploration with a model inference engine (industrial partner Openium).

* Model generation of IOT systems to assess (audit) their security. See the project VASOC [here](https://vasoc.limos.fr/).

Some problematics:

* Limiting the application exploration
* Dynamic definition of the state abstraction
* Raising the model abstraction
* Model approximation can meet testing ?

 
## Thesis supervisory:

* 2008 september, title: web service testability, student: Issam Rabhi (with Patrice Laurençot)
* 2011 november, title: application and transaction security on mobile phones, student : Stassia Resondry Za Miharisoa (with Patrice Laurençot)
* 2013 january, title: Reusing and optimizing tests for testing production machines,  student William durand, grant CIFRE Michelin
* 2014 october, title: preserving personal data with conception and testing, student: Loukmen Regainia, grant from the industrial chair on digital confidence (with C. Bouhours)
* 2015 october, title: user traceability for authentication and security, student: Giacomo Khan, Project S3 DIS4 (with O. Raynaud)
* 2017 january, title: Towards the security audit of IOTs, student: Elliott Blot, Project VASOC.

 
## Supervisor of Master (university)training:

* 2008 Web service conformance study, student: S. Rihawi
* 2007 Ajax validation, student: B. Boussad
* 2004 Timed systems fault localisation, student: Y. Haydersah
