<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: godaddy/v1/api.proto

namespace GPBMetadata\Godaddy\V1;

class Api
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae3170a14676f64616464792f76312f6170692e70726f746f120a676f64" .
            "616464792e763122510a22476574446f6d61696e53756767657374696f6e" .
            "416e64507269636552657175657374120e0a06646f6d61696e1801200128" .
            "09120c0a04746c6473180220032809120d0a056c696d6974180320012803" .
            "22a3010a23476574446f6d61696e53756767657374696f6e416e64507269" .
            "6365526573706f6e7365124f0a0b73756767657374696f6e731801200328" .
            "0b323a2e676f64616464792e76312e476574446f6d61696e537567676573" .
            "74696f6e416e645072696365526573706f6e73652e53756767657374696f" .
            "6e1a2b0a0a53756767657374696f6e120e0a06646f6d61696e1801200128" .
            "09120d0a057072696365180220012803223f0a154c697374444e53526563" .
            "6f72647352657175657374120e0a06646f6d61696e18012001280912160a" .
            "0a706172746e65725f69641802200128094202180122540a09444e535265" .
            "636f7264120c0a0474797065180120012809120c0a046e616d6518022001" .
            "2809120c0a0464617461180320012809120b0a0374746c18042001280312" .
            "100a087072696f7269747918052001280322440a164c697374444e535265" .
            "636f726473526573706f6e7365122a0a0b646e735f7265636f7264731801" .
            "2003280b32152e676f64616464792e76312e444e535265636f726422680a" .
            "13507574444e535265636f726452657175657374120e0a06646f6d61696e" .
            "18012001280912160a0a706172746e65725f696418022001280942021801" .
            "12290a0a646e735f7265636f726418032001280b32152e676f6461646479" .
            "2e76312e444e535265636f726422710a1b5265706c616365416c6c444e53" .
            "5265636f72647352657175657374120e0a06646f6d61696e180120012809" .
            "12160a0a706172746e65725f696418022001280942021801122a0a0b646e" .
            "735f7265636f72647318032003280b32152e676f64616464792e76312e44" .
            "4e535265636f7264225c0a1644656c657465444e535265636f7264526571" .
            "75657374120e0a06646f6d61696e180120012809120c0a04747970651802" .
            "20012809120c0a046e616d6518032001280912160a0a706172746e65725f" .
            "696418042001280942021801222b0a19476574446f6d61696e417661696c" .
            "61626c6552657175657374120e0a06646f6d61696e180120012809222f0a" .
            "1a476574446f6d61696e417661696c61626c65526573706f6e736512110a" .
            "09617661696c61626c65180120012808223b0a1a476574446f6d61696e41" .
            "677265656d656e747352657175657374120c0a04746c6473180120032809" .
            "120f0a077072697661637918022001280822b5010a1b476574446f6d6169" .
            "6e41677265656d656e7473526573706f6e736512450a0a61677265656d65" .
            "6e747318012003280b32312e676f64616464792e76312e476574446f6d61" .
            "696e41677265656d656e7473526573706f6e73652e41677265656d656e74" .
            "1a4f0a0941677265656d656e7412150a0d61677265656d656e745f6b6579" .
            "180120012809120f0a07636f6e74656e74180220012809120d0a05746974" .
            "6c65180320012809120b0a0375726c18042001280922cf020a07436f6e74" .
            "616374123b0a0f616464726573735f6d61696c696e6718012001280b3222" .
            "2e676f64616464792e76312e436f6e746163742e416464726573734d6169" .
            "6c696e67120d0a05656d61696c180220012809120b0a0366617818032001" .
            "280912110a096a6f625f7469746c6518042001280912120a0a6e616d655f" .
            "666972737418052001280912110a096e616d655f6c617374180620012809" .
            "12130a0b6e616d655f6d6964646c6518072001280912140a0c6f7267616e" .
            "697a6174696f6e180820012809120d0a0570686f6e651809200128091a77" .
            "0a0e416464726573734d61696c696e6712100a0861646472657373311801" .
            "2001280912100a086164647265737332180220012809120c0a0463697479" .
            "180320012809120f0a07636f756e74727918042001280912130a0b706f73" .
            "74616c5f636f6465180520012809120d0a05737461746518062001280922" .
            "8c010a1c56616c6964617465446f6d61696e436f6e746163745265717565" .
            "7374122a0a0d636f6e746163745f61646d696e18012001280b32132e676f" .
            "64616464792e76312e436f6e74616374122f0a12636f6e746163745f7265" .
            "6769737472616e7418022001280b32132e676f64616464792e76312e436f" .
            "6e74616374120f0a07646f6d61696e731803200328092288010a1d56616c" .
            "6964617465446f6d61696e436f6e74616374526573706f6e7365123f0a06" .
            "6669656c647318012003280b322f2e676f64616464792e76312e56616c69" .
            "64617465446f6d61696e436f6e74616374526573706f6e73652e4669656c" .
            "641a260a054669656c64120f0a076d657373616765180120012809120c0a" .
            "047061746818022001280922350a1e4c697374446f6d61696e7342794275" .
            "73696e65737349445265717565737412130a0b627573696e6573735f6964" .
            "18012001280922320a1f4c697374446f6d61696e734279427573696e6573" .
            "734944526573706f6e7365120f0a07646f6d61696e73180120032809227b" .
            "0a155472616e73666572446f6d61696e5265717565737412130a0b627573" .
            "696e6573735f6964180120012809120e0a06646f6d61696e180220012809" .
            "12110a09617574685f636f6465180320012809122a0a0d636f6e74616374" .
            "5f61646d696e18042001280b32132e676f64616464792e76312e436f6e74" .
            "61637432cf070a07476f4461646479127e0a1b476574446f6d61696e5375" .
            "6767657374696f6e416e645072696365122e2e676f64616464792e76312e" .
            "476574446f6d61696e53756767657374696f6e416e645072696365526571" .
            "756573741a2f2e676f64616464792e76312e476574446f6d61696e537567" .
            "67657374696f6e416e645072696365526573706f6e736512570a0e4c6973" .
            "74444e535265636f72647312212e676f64616464792e76312e4c69737444" .
            "4e535265636f726473526571756573741a222e676f64616464792e76312e" .
            "4c697374444e535265636f726473526573706f6e736512470a0c50757444" .
            "4e535265636f7264121f2e676f64616464792e76312e507574444e535265" .
            "636f7264526571756573741a162e676f6f676c652e70726f746f6275662e" .
            "456d70747912570a145265706c616365416c6c444e535265636f72647312" .
            "272e676f64616464792e76312e5265706c616365416c6c444e535265636f" .
            "726473526571756573741a162e676f6f676c652e70726f746f6275662e45" .
            "6d707479124d0a0f44656c657465444e535265636f726412222e676f6461" .
            "6464792e76312e44656c657465444e535265636f7264526571756573741a" .
            "162e676f6f676c652e70726f746f6275662e456d70747912630a12476574" .
            "446f6d61696e417661696c61626c6512252e676f64616464792e76312e47" .
            "6574446f6d61696e417661696c61626c65526571756573741a262e676f64" .
            "616464792e76312e476574446f6d61696e417661696c61626c6552657370" .
            "6f6e736512660a13476574446f6d61696e41677265656d656e747312262e" .
            "676f64616464792e76312e476574446f6d61696e41677265656d656e7473" .
            "526571756573741a272e676f64616464792e76312e476574446f6d61696e" .
            "41677265656d656e7473526573706f6e7365126c0a1556616c6964617465" .
            "446f6d61696e436f6e7461637412282e676f64616464792e76312e56616c" .
            "6964617465446f6d61696e436f6e74616374526571756573741a292e676f" .
            "64616464792e76312e56616c6964617465446f6d61696e436f6e74616374" .
            "526573706f6e736512720a174c697374446f6d61696e734279427573696e" .
            "6573734944122a2e676f64616464792e76312e4c697374446f6d61696e73" .
            "4279427573696e6573734944526571756573741a2b2e676f64616464792e" .
            "76312e4c697374446f6d61696e734279427573696e657373494452657370" .
            "6f6e7365124b0a0e5472616e73666572446f6d61696e12212e676f646164" .
            "64792e76312e5472616e73666572446f6d61696e526571756573741a162e" .
            "676f6f676c652e70726f746f6275662e456d707479422d0a21636f6d2e76" .
            "656e64617374612e676f64616464792e76312e67656e6572617465644208" .
            "41706950726f746f620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

