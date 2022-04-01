# detokenizer

detokenizer of configuration files. Inject properties in source code before
deployment.

## Usage

|Command|Parameters|Description|
|:---|:--|:---|
|scan|sourcefolder<br/>properties|Scan source folder and returns list of candidates files fully matching provided properties file|
|execute|sourcefolder<br/>properties<br/>destination|Copies all files recursivly from source to destination and replaces all tokens with values from properties|

The application return 0 on success. 
