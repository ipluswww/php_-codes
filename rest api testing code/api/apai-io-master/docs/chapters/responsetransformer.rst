The ResponseTransformer
=======================

The Responsetransformer is a nice way to manipulate the response which comes from the amazon api.

For example if you making a REST call, you will get back a xml response which contains all items of the specified responsegroup.

So what to do if you want to change this response? The answer is: The ResponseTransfomer!

ResponseTransfomer under the hood (interface)
---------------------------------------------

.. code-block:: php

    namespace ApaiIO\ResponseTransformer;

    interface ResponseTransformerInterface
    {
        /**
         * Transforms the response of the request
         *
         * @param mixed $response
         */
        public function transform($response);
    }

Every ResponseTransformer implements this simple interface. The function transform takes care about transforming the response which comes from amazon.

Nothing else to do! You have the choice: You can build your own ResponseTransformer or you can use one of the built in.

Built in Responsetransformer
----------------------------

apai-io comes with some build in ResponseTransfomer classes.

ObjectToArray
_____________

The ObjectToArray ResponseTransformer transforms Objects (stdClass) to an array. Its basicly used when you decided to make SOAP requests.

You can pass the fully quallified class name to the configuration object which you use:

.. code-block:: php

    use ApaiIO\Configuration\GenericConfiguration;
    use ApaiIO\ApaiIO;

    $conf = new GenericConfiguration();
    $conf
        ->setCountry('com')
        ->setAccessKey(AWS_API_KEY)
        ->setSecretKey(AWS_API_SECRET_KEY)
        ->setAssociateTag(AWS_ASSOCIATE_TAG)
        ->setRequest('\ApaiIO\Request\Soap\Request')
        ->setResponseTransformer('\ApaiIO\ResponseTransformer\ObjectToArray');

    $apaiIo = new ApaiIO($conf);

    // ... Preparing your operation

    $response = $apaiIo->runOperation($operation);

If you run this code the $response will be an array containing the whole response from the amazon api.

You now can access the key you want or iterate over it.

Note: This will only work if you are going to make SOAP Requests.

XmlToDomDocument
________________

By default apai-io uses REST request to query the amazon database.

All REST requests having a XML-String as response

The XmlToDomDocument transformer transforms the XML-Response to an instance of \DOMDocument.

.. code-block:: php

    use ApaiIO\Configuration\GenericConfiguration;
    use ApaiIO\ApaiIO;

    $conf = new GenericConfiguration();
    $conf
        ->setCountry('com')
        ->setAccessKey(AWS_API_KEY)
        ->setSecretKey(AWS_API_SECRET_KEY)
        ->setAssociateTag(AWS_ASSOCIATE_TAG)
        ->setResponseTransformer('\ApaiIO\ResponseTransformer\XmlToDomDocument');

    $apaiIo = new ApaiIO($conf);

    // ... Preparing your operation

    $response = $apaiIo->runOperation($operation);

Xslt
____

If you want to transform a XML to a for example usage ready HTML you can use the XSLT Transformer.

What XSLT is, you can see here: Wikipedia :)

.. code-block:: php

    use ApaiIO\Configuration\GenericConfiguration;
    use ApaiIO\ApaiIO;
    use ApaiIO\ResponseTransformer\Xslt;

    $xsltResponseTransformer = new Xslt($xstlTemplate); // $xstlTemplate -> String

    $conf = new GenericConfiguration();
    $conf
        ->setCountry('com')
        ->setAccessKey(AWS_API_KEY)
        ->setSecretKey(AWS_API_SECRET_KEY)
        ->setAssociateTag(AWS_ASSOCIATE_TAG)
        ->setResponseTransformer($xsltResponseTransformer);

    $apaiIo = new ApaiIO($conf);

    // ... Preparing your operation

    $response = $apaiIo->runOperation($operation);

Creating your own ResponseTransformer
_____________________________________

If you need your own ResponseTransformer you can simply achieve this by implementing the ResponseTransformerInterface and passing the instance of your class or its name to the configuration object.

Let's build our own Transformer which returns all Item Elements via XPath.

.. code-block:: php

    namespace Acme\Demo;

    use ApaiIO\ResponseTransformer\ResponseTransformerInterface;

    class ItemSearchXmlToItems implements ResponseTransformerInterface
    {
        public function transform($response)
        {
            $xml =  simplexml_load_string($response);
            $xml->registerXPathNamespace("amazon", "http://webservices.amazon.com/AWSECommerceService/2011-08-01");

            $elements = $xml->xpath('//amazon:ItemSearchResponse/amazon:Items/amazon:Item');

            return $elements;
        }
    }

Now you have build the class you can use it out of the box:

.. code-block:: php

    use ApaiIO\Configuration\GenericConfiguration;
    use ApaiIO\ApaiIO;
    use Acme\Demo\ItemSearchXmlToItems;

    $itemSearchXmlToItems = new ItemSearchXmlToItems();

    $conf = new GenericConfiguration();
    $conf
        ->setCountry('com')
        ->setAccessKey(AWS_API_KEY)
        ->setSecretKey(AWS_API_SECRET_KEY)
        ->setAssociateTag(AWS_ASSOCIATE_TAG)
        ->setResponseTransformer($itemSearchXmlToItems);

    $apaiIo = new ApaiIO($conf);

    // ... Preparing your operation

    $response = $apaiIo->runOperation($operation);

If you dont want to instanciate the object you can pass the fully quallified class name:

.. code-block:: php

    $conf->setResponseTransformer('\Acme\Demo\ItemSearchXmlToItems');

    $apaiIo = new ApaiIO($conf);

    // ... Preparing your operation

    $response = $apaiIo->runOperation($operation);