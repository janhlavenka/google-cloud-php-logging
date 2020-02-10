<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace GPBMetadata\Google\Logging\V2;

class Logging
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Logging\V2\LogEntry::initOnce();
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afc180a1f676f6f676c652f6c6f6767696e672f76322f6c6f6767696e67" .
            "2e70726f746f1211676f6f676c652e6c6f6767696e672e76321a1f676f6f" .
            "676c652f6170692f6669656c645f6265686176696f722e70726f746f1a23" .
            "676f6f676c652f6170692f6d6f6e69746f7265645f7265736f757263652e" .
            "70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f" .
            "746f1a21676f6f676c652f6c6f6767696e672f76322f6c6f675f656e7472" .
            "792e70726f746f1a26676f6f676c652f6c6f6767696e672f76322f6c6f67" .
            "67696e675f636f6e6669672e70726f746f1a1e676f6f676c652f70726f74" .
            "6f6275662f6475726174696f6e2e70726f746f1a1b676f6f676c652f7072" .
            "6f746f6275662f656d7074792e70726f746f1a1f676f6f676c652f70726f" .
            "746f6275662f74696d657374616d702e70726f746f1a17676f6f676c652f" .
            "7270632f7374617475732e70726f746f1a1c676f6f676c652f6170692f61" .
            "6e6e6f746174696f6e732e70726f746f22480a1044656c6574654c6f6752" .
            "65717565737412340a086c6f675f6e616d651801200128094222e04102fa" .
            "411c121a6c6f6767696e672e676f6f676c65617069732e636f6d2f4c6f67" .
            "22cf020a1657726974654c6f67456e74726965735265717565737412310a" .
            "086c6f675f6e616d65180120012809421ffa411c0a1a6c6f6767696e672e" .
            "676f6f676c65617069732e636f6d2f4c6f67122f0a087265736f75726365" .
            "18022001280b321d2e676f6f676c652e6170692e4d6f6e69746f72656452" .
            "65736f7572636512450a066c6162656c7318032003280b32352e676f6f67" .
            "6c652e6c6f6767696e672e76322e57726974654c6f67456e747269657352" .
            "6571756573742e4c6162656c73456e74727912310a07656e747269657318" .
            "042003280b321b2e676f6f676c652e6c6f6767696e672e76322e4c6f6745" .
            "6e7472794203e0410212170a0f7061727469616c5f737563636573731805" .
            "20012808120f0a076472795f72756e1806200128081a2d0a0b4c6162656c" .
            "73456e747279120b0a036b6579180120012809120d0a0576616c75651802" .
            "200128093a02380122190a1757726974654c6f67456e7472696573526573" .
            "706f6e736522c8010a1c57726974654c6f67456e74726965735061727469" .
            "616c4572726f7273125d0a106c6f675f656e7472795f6572726f72731801" .
            "2003280b32432e676f6f676c652e6c6f6767696e672e76322e5772697465" .
            "4c6f67456e74726965735061727469616c4572726f72732e4c6f67456e74" .
            "72794572726f7273456e7472791a490a134c6f67456e7472794572726f72" .
            "73456e747279120b0a036b657918012001280512210a0576616c75651802" .
            "2001280b32122e676f6f676c652e7270632e5374617475733a02380122b5" .
            "010a154c6973744c6f67456e74726965735265717565737412170a0b7072" .
            "6f6a6563745f69647318012003280942021801123a0a0e7265736f757263" .
            "655f6e616d65731808200328094222e04102fa411c121a6c6f6767696e67" .
            "2e676f6f676c65617069732e636f6d2f4c6f67120e0a0666696c74657218" .
            "022001280912100a086f726465725f627918032001280912110a09706167" .
            "655f73697a6518042001280512120a0a706167655f746f6b656e18052001" .
            "2809225f0a164c6973744c6f67456e7472696573526573706f6e7365122c" .
            "0a07656e747269657318012003280b321b2e676f6f676c652e6c6f676769" .
            "6e672e76322e4c6f67456e74727912170a0f6e6578745f706167655f746f" .
            "6b656e18022001280922500a274c6973744d6f6e69746f7265645265736f" .
            "7572636544657363726970746f72735265717565737412110a0970616765" .
            "5f73697a6518012001280512120a0a706167655f746f6b656e1802200128" .
            "09228a010a284c6973744d6f6e69746f7265645265736f75726365446573" .
            "63726970746f7273526573706f6e736512450a147265736f757263655f64" .
            "657363726970746f727318012003280b32272e676f6f676c652e6170692e" .
            "4d6f6e69746f7265645265736f7572636544657363726970746f7212170a" .
            "0f6e6578745f706167655f746f6b656e18022001280922690a0f4c697374" .
            "4c6f677352657175657374122f0a06706172656e74180120012809421ffa" .
            "411c121a6c6f6767696e672e676f6f676c65617069732e636f6d2f4c6f67" .
            "12110a09706167655f73697a6518022001280512120a0a706167655f746f" .
            "6b656e180320012809223e0a104c6973744c6f6773526573706f6e736512" .
            "110a096c6f675f6e616d657318032003280912170a0f6e6578745f706167" .
            "655f746f6b656e18022001280932bc0a0a104c6f6767696e675365727669" .
            "636556321293020a0944656c6574654c6f6712232e676f6f676c652e6c6f" .
            "6767696e672e76322e44656c6574654c6f67526571756573741a162e676f" .
            "6f676c652e70726f746f6275662e456d70747922c80182d3e49302b6012a" .
            "202f76322f7b6c6f675f6e616d653d70726f6a656374732f2a2f6c6f6773" .
            "2f2a7d5a1b2a192f76322f7b6c6f675f6e616d653d2a2f2a2f6c6f67732f" .
            "2a7d5a272a252f76322f7b6c6f675f6e616d653d6f7267616e697a617469" .
            "6f6e732f2a2f6c6f67732f2a7d5a212a1f2f76322f7b6c6f675f6e616d65" .
            "3d666f6c646572732f2a2f6c6f67732f2a7d5a292a272f76322f7b6c6f67" .
            "5f6e616d653d62696c6c696e674163636f756e74732f2a2f6c6f67732f2a" .
            "7dda41086c6f675f6e616d6512a9010a0f57726974654c6f67456e747269" .
            "657312292e676f6f676c652e6c6f6767696e672e76322e57726974654c6f" .
            "67456e7472696573526571756573741a2a2e676f6f676c652e6c6f676769" .
            "6e672e76322e57726974654c6f67456e7472696573526573706f6e736522" .
            "3f82d3e493021622112f76322f656e74726965733a77726974653a012ada" .
            "41206c6f675f6e616d652c7265736f757263652c6c6162656c732c656e74" .
            "726965731282010a0e4c6973744c6f67456e747269657312282e676f6f67" .
            "6c652e6c6f6767696e672e76322e4c6973744c6f67456e74726965735265" .
            "71756573741a292e676f6f676c652e6c6f6767696e672e76322e4c697374" .
            "4c6f67456e7472696573526573706f6e7365221b82d3e493021522102f76" .
            "322f656e74726965733a6c6973743a012a12c5010a204c6973744d6f6e69" .
            "746f7265645265736f7572636544657363726970746f7273123a2e676f6f" .
            "676c652e6c6f6767696e672e76322e4c6973744d6f6e69746f7265645265" .
            "736f7572636544657363726970746f7273526571756573741a3b2e676f6f" .
            "676c652e6c6f6767696e672e76322e4c6973744d6f6e69746f7265645265" .
            "736f7572636544657363726970746f7273526573706f6e7365222882d3e4" .
            "93022212202f76322f6d6f6e69746f7265645265736f7572636544657363" .
            "726970746f72731288020a084c6973744c6f677312222e676f6f676c652e" .
            "6c6f6767696e672e76322e4c6973744c6f6773526571756573741a232e67" .
            "6f6f676c652e6c6f6767696e672e76322e4c6973744c6f6773526573706f" .
            "6e736522b20182d3e49302a20112152f76322f7b706172656e743d2a2f2a" .
            "7d2f6c6f67735a1e121c2f76322f7b706172656e743d70726f6a65637473" .
            "2f2a7d2f6c6f67735a2312212f76322f7b706172656e743d6f7267616e69" .
            "7a6174696f6e732f2a7d2f6c6f67735a1d121b2f76322f7b706172656e74" .
            "3d666f6c646572732f2a7d2f6c6f67735a2512232f76322f7b706172656e" .
            "743d62696c6c696e674163636f756e74732f2a7d2f6c6f6773da41067061" .
            "72656e741a8d02ca41166c6f6767696e672e676f6f676c65617069732e63" .
            "6f6dd241f00168747470733a2f2f7777772e676f6f676c65617069732e63" .
            "6f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f" .
            "2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f7564" .
            "2d706c6174666f726d2e726561642d6f6e6c792c68747470733a2f2f7777" .
            "772e676f6f676c65617069732e636f6d2f617574682f6c6f6767696e672e" .
            "61646d696e2c68747470733a2f2f7777772e676f6f676c65617069732e63" .
            "6f6d2f617574682f6c6f6767696e672e726561642c68747470733a2f2f77" .
            "77772e676f6f676c65617069732e636f6d2f617574682f6c6f6767696e67" .
            "2e77726974654298010a15636f6d2e676f6f676c652e6c6f6767696e672e" .
            "7632420c4c6f6767696e6750726f746f50015a38676f6f676c652e676f6c" .
            "616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6c6f" .
            "6767696e672f76323b6c6f6767696e67f80101aa0217476f6f676c652e43" .
            "6c6f75642e4c6f6767696e672e5632ca0217476f6f676c655c436c6f7564" .
            "5c4c6f6767696e675c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

