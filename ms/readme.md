# MegaLOD Project Metadata Schemes
These four metadata schemes were created to be used in the context of the MegaLOD Metadata Application Profile (see https://purl.org/megalod/map/)

# Excavation Metadata Scheme
URI: https//purl.org/megalod/ms/excav/

## Classes

| Label                                   | Vocabulary Term         | Note                                                   |
|-----------------------------------------|-------------------------|--------------------------------------------------------|
| Excavation                              | Excavation              | rdfs:subClassOf crmarchaeo:A9_Archaeological_Excavation|                                 
| Archaeologist                           | Archaeologist           | rdfs:subClassOf foaf:Person; owl:equivalentClass crm:E21_Person; |                               
| Location                                | Location                | rdfs:subClassOf dbo:Place|                           
| GPS Coordinates                         | GPSCoordinates          | rdfs:subClassOfgeo:SpatialThing |                     
| Encounter Event                         | EncounterEvent          | rdfs:subClassOf crmsci:S19_Encounter_Event    |                                   
| Stratigraphic Volume Unit               | StratigraphicVolumeUnit | rdfs:subClassOf crmarchaeo:A2_Stratigraphic_Volume_Unit|                                       
| Context                                 | Context                 | rdfs:subClassOf crmarchaeo:A1_Excavation_Processing_Unit|
| TimeLine                                | TimeLine                | rdfs:subClassOf time:TemporalEntity|
| Instant                                 | Instant                 | rdfs:subClassOf time:Instant|
| Item                                    | Item                    | rdfs:subClassOf crm:E24_Physical_Man-Made_Thing|   



## Terms
| Label                                   | Vocabulary Term         | Domain                             |Range |
|-----------------------------------------|-------------------------|------------------------------------|------|
| has GPS Coordinates                     | hasGPSCoordinates       | excav:Location                     | excav:GPSCoordinates                       |
| has a person in charge                  | hasPersonInCharge       | excav:Excavation                   | excav:Archaeologist                      |
| has context                             | hasContext              | excav:Excavation                   | excav:Context |
| has Stratigraphic Unit                  | hasSVU                  | excav:Context                      | excav:StratigraphicVolumeUnit  |
| hasTimeLine                             | hasTimeLine             | excav:StratigraphicVolumeUnit      | excav:TimeLine                      |
| Item found In a StratigraphicVolumeUnit | foundInSVU              | excav:EncounterEvent               | excav:StratigraphicVolumeUnit  |
| Item found In a Context                 | foundInAContext         | excav:EncounterEvent               | excav:Context|
| Item found In a Excavation              | foundInAExcavation      | excav:EncounterEvent               | excav:Excavation  |
| Before (True) or After (False) christ   | bc                      | excav:bc                           | xsd:boolean                              |


# Arrowhead Metadata Scheme
URI: https//purl.org/megalod/ms/ah/

## Classes
| Label                                   | Vocabulary Term         | Note |
|-----------------------------------------|-------------------------|------|
| Arrowhead                               | Arrowhead               | rdfs:subClassOf excav:Item |
| Morphology                              | Morphology              |     |  
| Typometry                               | Typometry                   |  |    
| Chipping                                | Chipping                    |   |  


## Terms
| Label                                                | Vocabulary Term                | Domain                           | Range            | VES                    |
|------------------------------------------------------|--------------------------------|----------------------------------|------------------|------------------------|
| Shape                                                | ah:shape                       | excav:Arrowhead                  | xsd:anyURI       | ah-shape               |
| Variant                                              | ah:variant                     | excav:Arrowhead                  | xsd:anyURI       | ah-variant             |
| Point (Sharp=True;Fractured=False)                   | ah:point                       | ah:Morphology                    | xsd:boolean      |                        |
| Body (Symmetrical=True; Non-symmetrical=False)       | ah:body                        | ah:Morphology                    | xsd:boolean      |                        |
| Base                                                 | ah:base                        | ah:Morphology                    | xsd:anyURI       | ah-base                |
| Chipping-mode                                        | ah:mode                        | ah:Chipping                      | xsd:anyURI       | ah-chippingMode        |
| Chipping-amplitude (Marginal=True;Deep=False)        | ah:amplitude                   | ah:Chipping                      | xsd:boolean      |                        |
| Chipping-direction                                   | ah:direction                   | ah:Chipping                      | xsd:anyURI       | ah-chippingDirection   |
| Chipping-orientation (Lateral=True;Transverse=False) | ah:orientation                 | ah:Chipping                      | xsd:boolean      |                       |
| Chipping-delineation                                 | ah:dileneation                 | ah:Chipping                      | xsd:anyURI       | ah-chippingDelineation |
| Chipping-location-Side                               | ah:chippinglocation-Side       | ah:Chipping                      | xsd:anyURI       | ah-chippingLocation    |
| Chipping-Location-Transversal                        | ah:chippingLocation-Transveral | ah:Chipping                      | xsd:anyURI       | ah-chippingLocation    |
| Chipping-Shape                                       | ah:chippingShape               | ah:Chipping                      | xsd:anyURI       | ah-chippingShape       |
| The arrowhead was found in the GPSCoordinates        | ah:foundInCoordinates          | excav:Arrowhead                  | excav:GPSCoordinates |                        |
| The arrowhead has a Morphology                       | ah:hasMorphology               | excav:Arrowhead                  | ah:Morphology    |                        |
| The arrowhead has a typometry                        | ah:hasTypometry                | excav:Arrowhead                  | ah:Typometry     |                        |
| The arrowhead has a Chipping                         | ah:hasChipping                 | excav:Arrowhead                  | ah:Chipping      | |



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
