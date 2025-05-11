# MegaLOD Project Metadata Schemes
These four metadata schemes were created to be used in the context of the MegaLOD Metadata Application Profile (see https://purl.org/megalod/map/)

# Excavation Metadata Scheme
URI: https//purl.org/megalod/ms/excav/

## Classes

| Label                                   | Vocabulary Term         | Note                                                             |
|-----------------------------------------|-------------------------|------------------------------------------------------------------|
| Excavation                              | Excavation              | rdfs:subClassOf crmarchaeo:A9_Archaeological_Excavation          |                                 
| Archaeologist                           | Archaeologist           | rdfs:subClassOf foaf:Person; owl:equivalentClass crm:E21_Person; |                               
| Location                                | Location                | rdfs:subClassOf dbo:Place                                        |                           
| GPS Coordinates                         | GPSCoordinates          | rdfs:subClassOf geo:SpatialThing                                 |                     
| Encounter Event                         | EncounterEvent          | rdfs:subClassOf crmsci:S19_Encounter_Event                       |                                   
| Stratigraphic Volume Unit               | StratigraphicVolumeUnit | rdfs:subClassOf crmarchaeo:A2_Stratigraphic_Volume_Unit          |                                       
| Context                                 | Context                 | rdfs:subClassOf crmarchaeo:A1_Excavation_Processing_Unit         |
| TimeLine                                | TimeLine                | rdfs:subClassOf time:TemporalEntity|
| Instant                                 | Instant                 | rdfs:subClassOf time:Instant|
| Square                                  | Square                  | rddfs:subClassOf schema:Place |
| Coordinates                             | Coordinates             | rddfs:subClassOf schema:GeoCoordinates |
| Weight                                  | Weight                  | rddfs:subClassOf schema:QuantitativeValue |
| Depth                                   | Depth                   | rddfs:subClassOf schema:QuantitativeValue |
| TypometryValue                          | TypometryValue          | rddfs:subClassOf schema:QuantitativeValue |
| Item                                    | Item                    | rdfs:subClassOf crm:E24_Physical_Man-Made_Thing|   



## Terms
| Label                                   | Vocabulary Term                  | Domain                              |Range                                        | VES|
|-----------------------------------------|----------------------------------|-------------------------------------|---------------------------------------------|----|
| Has GPS Coordinates                     | hasGPSCoordinates                | excav:Location                      | excav:GPSCoordinates                        | |
| Has person in charge                    | hasPersonInCharge                | excav:Excavation                    | excav:Archaeologist                         | |
| Has context                             | hasContext                       | excav:Excavation                    | excav:Context                               | |
| has Stratigraphic Unit                  | hasSVU                           | excav:Context                       | excav:StratigraphicVolumeUnit               | |
| Has Square                              | hasSquare                        | excav:Square                        | excav:Excavation                            | |
| hasTimeLine                             | hasTimeLine                      | excav:StratigraphicVolumeUnit       | excav:TimeLine                              | |
| Item found in the GPSCoordinates        | excav:foundInCoordinates         | excav:Item                          | excav:GPSCoordinates                        |   |                             
| Item found In a StratigraphicVolumeUnit | foundInSVU                       | excav:EncounterEvent                | excav:StratigraphicVolumeUnit               | |
| Item found In a Context                 | foundInContext                   | excav:EncounterEvent                | excav:Context                               | |
| Item found In a Excavation              | foundInExcavation                | excav:EncounterEvent                | excav:Excavation                            | |
| Item found in the Coordinates (within the square) | hasCoordinatesInSquare | excav:Item                          | excav:Coordinates                           |   |        
| Before or After Christ                  | bcac                             | excav:Instant                       | xsd:anyURI                                  | MegaLOD-BCAC |
| Elongation Index of the Item            | elongation                       | excav:Item                          | xsd:anyURI                                  |  MegaLOD-IndexElongation|
| Thickness  Index of the Item            | thickness                        | excav:Item                          | xsd:anyURI                                  |  MegaLOD-IndexThickness|


     
# Arrowhead Metadata Scheme
URI: https//purl.org/megalod/ms/ah/

namespaces--> excav:https//purl.org/megalod/ms/excav/

## Classes
| Label                                   | Vocabulary Term         | Note |
|-----------------------------------------|-------------------------|------|
| Arrowhead                               | Arrowhead               | rdfs:subClassOf excav:Item |
| Morphology                              | Morphology              |     |   
| Chipping                                | Chipping                |     |  


## Terms
| Label                                                | Vocabulary Term             | Domain                        | Range            | VES                    | Notes |
|------------------------------------------------------|-----------------------------|-------------------------------|------------------|------------------------|------|
| Shape                                                | shape                       | Arrowhead                     | xsd:anyURI       | ah-shape               | |
| Variant                                              | variant                     | Arrowhead                     | xsd:anyURI       | ah-variant             | |
| Point (Sharp=True;Fractured=False)                   | point                       | Morphology                    | xsd:boolean      |                        | |
| Body (Symmetrical=True; Non-symmetrical=False)       | body                        | Morphology                    | xsd:boolean      |                        | |
| Base                                                 | base                        | Morphology                    | xsd:anyURI       | ah-base                | |
| Chipping-mode                                        | mode                        | Chipping                      | xsd:anyURI       | ah-chippingMode        | |
| Chipping-amplitude (Marginal=True;Deep=False)        | amplitude                   | Chipping                      | xsd:boolean      |                        | |
| Chipping-direction                                   | direction                   | Chipping                      | xsd:anyURI       | ah-chippingDirection   | |
| Chipping-orientation (Lateral=True;Transverse=False) | orientation                 | Chipping                      | xsd:boolean      |                       | |
| Chipping-delineation                                 | dileneation                 | Chipping                      | xsd:anyURI       | ah-chippingDelineation | |
| Chipping-location-Side                               | chippinglocation-Side       | Chipping                      | xsd:anyURI       | ah-chippingLocation    | |
| Chipping-Location-Transversal                        | chippingLocation-Transveral | Chipping                      | xsd:anyURI       | ah-chippingLocation    | |
| Chipping-Shape                                       | chippingShape               | Chipping                      | xsd:anyURI       | ah-chippingShape       | |
| The arrowhead has a Morphology                       | hasMorphology               | Arrowhead                     | Morphology       |                        | |
| The arrowhead has a Chipping                         | hasChipping                 | Arrowhead                     | Chipping         | |  |
| Body length of the Arrowhead                         | bodyLength                  | Arrowhead                     | excav:TypometryValue | | rdfs:subPropertyOf crm:E54_Dimension |
| Base length of the Arrowhead                         | baseLength                  | Arrowhead                     | excav:TypometryValue | | rdfs:subPropertyOf crm:E54_Dimension |




# Axe Metadata Scheme
URI: https//purl.org/megalod/ms/axe/

## Classes
| Label                                                | Vocabulary Term                |  Note |
|------------------------------------------------------|--------------------------------|----------------------------------|
|Axe                                                   | ax:axe                          |   rdfs:subClassOf excav:Item                               |             


## Terms
| Label                                                | Vocabulary Term                | Domain                           | Range            | VES                    |
|------------------------------------------------------|--------------------------------|----------------------------------|------------------|------------------------|
| To be Defined |      |                                  |                  |                        |


# Loom Weight Metadata Scheme
URI: https//purl.org/megalod/ms/loomWeight/

## Classes
| Label                                                | Vocabulary Term                |  Note |
|------------------------------------------------------|--------------------------------|----------------------------------|
| Loom Weight                                          | ax:LoomWeight                  | rdfs:subClassOf excav:Item               |             


## Terms
| Label                                                | Vocabulary Term                | Domain                           | Range            | VES                    |
|------------------------------------------------------|--------------------------------|----------------------------------|------------------|------------------------|
| To be Defined |      |                                  |                  |                        |
