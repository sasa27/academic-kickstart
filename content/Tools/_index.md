+++
# A Demo section created with the Blank widget.
# Any elements can be added in the body: https://sourcethemes.com/academic/docs/writing-markdown-latex/
# Add more sections by duplicating this file and customizing to your requirements.

widget = "blank"  # See https://sourcethemes.com/academic/docs/page-builder/
headless = true  # This file represents a page section.
active = true  # Activate this widget? true/false
weight = 15  # Order that this section will appear.

title = "Tools"
subtitle = "Tools related to project or publications"

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


## COnfECt

COnfECt is a model inference approach that takes execution traces of a component based system and infers LTSs (Labelled Transition Systems) for each component of the system. It is based on kTail, a passive model learning method that works in two steps:

1. First, it constructs a tree from the traces, with each branch of the tree corresponding to a trace, and each event to an edge.
2. Then, it merges all states of this tree that have the same k-future, i.e. the states that have the same future of length k.

The method COnfECt adds two steps to kTail: Trace Analysis & Extraction, and LTS synchronisation.

[Git link](https://github.com/Elblot/COnfECt)

Model generation
{{< figure library="1" src="Strong.jpg" title="Model generation" >}}
 
## TFormat

TFormat is a trace formatting tool. It takes raw messages, sorts out them, transforms them in actions (that can be read by COnfECt), and builds execution traces.

[Git link](https://github.com/Elblot/Mapper)


## MCrawlT

_Model reverse engineering of Android applications_

Feature: 
* models generation, storyboard generation,
* security vulnerability detection : SQL injection, brute force,
* crash detection, etc.

[wiki link](https://github.com/statops/MCrawlerT/blob/master/TOOLS/wiki.pdf)
[Git link](https://github.com/statops/MCrawlerT)

Storyboard example
{{< figure library="1" src="storyboard.jpg" title="Storyboard" >}}
Model generation
{{< figure library="1" src="model.jpg" title="Model generation" >}}


## APSET

an Android aPplication SEcurity Testing tool for detecting intent-based vulnerabilities.

[Git link](https://github.com/statops/apset.git)

## Cloud PASTE (Cloud PASsive TEsting)

Cloud PASTE is tool for passively testing Web service compositions deployed in PaaS platforms. At the moment, we provide a version of the tool for Google AppEngine (GAE) only. This passive tester takes a specification described with ioSTSs expressing the functional behaviours of the composition and tests its implementation deployed in GAE.

This passive tester is based upon the notion of transparent proxy for testing. Classical tools for monitoring/passive testing cannot be used with Clouds since the Cloud architecture restricts the access and prevent from installing a classical test architecture (sniffer based tool etc.). So, we derive a model called proxy-tester for testing.

[Cloud PASTE page here](http://sebastien.salva.free.fr/cloudpaste/cloudpaste.html)


Passive tester architecture:

{{< figure library="1" src="archi.png" title="Architecture" >}}

Tester interface:

{{< figure library="1" src="test1.png" title="Interface" >}}


## Black box web service testing WS-AT

WS-AT (Web Service Automatic Test tool) : Random test case generation with random values and predefined values well known for relieving bugs.

A dedicated page for WS-AT, showing its functionning can be found [here](http://sebastien.salva.free.fr/WS-AT/WS-AT.html).

Features:
* Kind of tests : operation existance, robustness, session

* provided with a classical interface or with an Eclipse pluggin.


Tester interface:

{{< figure library="1" src="wstester.jpg" title="Interface1" >}}

{{< figure library="1" src="wstester2.jpg" title="Interface2" >}}


Some results:
{{< figure library="1" src="results.jpg" title="Results" >}}


And a video :
{{< youtube K1yIr63ezRc >}}


## Test case generation from timed automata and region graphs

Test case generation with the State characterization method. Test case generation with a parallel algorithm using OPENMP

Example with a Timed automaton (part of the GSM protocol):

{{< figure library="1" src="dsmint.gif" title="automaton" >}} 


The associated region graph :

{{< figure library="1" src="dsm2M.gif" title="Region graph" >}}


State Caracterization results (complete results [here](http://sebastien.salva.free.fr/includes/dsm/dsm2M.tgTW.ps)

{{< figure library="1" src="dsm2MTW.gif" title="test cases" >}}



## Ajax components automatic testing

Features:

* Test case generation using random values and predefined values known for relieving bugs. * Test architecture implementation.
* Tool for modeling Ajax components with UML sequence diagrams.

{{< figure library="1" src="editor.jpg" title="Editor" >}}

The tester:
{{< figure library="1" src="tester.jpg" title="Tester" >}}


A video showing some tests:
{{< youtube PT2eujLcXQc >}}