<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace GPBMetadata;

class Schema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\GithubCom\Mwitkow\GoProtoValidators\Validator::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e230a0c736368656d612e70726f746f12086d657368706161731a1f67" .
            "6f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f" .
            "1a19676f6f676c652f70726f746f6275662f616e792e70726f746f1a1b67" .
            "6f6f676c652f70726f746f6275662f656d7074792e70726f746f1a366769" .
            "746875622e636f6d2f6d7769746b6f772f676f2d70726f746f2d76616c69" .
            "6461746f72732f76616c696461746f722e70726f746f22630a0941757468" .
            "6e52756c6512220a086a776b735f7572691801200128094210e2df1f0c0a" .
            "0a5e2e7b312c3232357d2412200a066973737565721802200128094210e2" .
            "df1f0c0a0a5e2e7b312c3232357d2412100a0861756469656e6365180320" .
            "03280922330a05417574686e122a0a0572756c657318012003280b32132e" .
            "6d657368706161732e417574686e52756c654206e2df1f02600122c8010a" .
            "0b536563726574496e707574121e0a046e616d651801200128094210e2df" .
            "1f0c0a0a5e2e7b312c3232357d2412220a047479706518032001280e3214" .
            "2e6d657368706161732e5365637265745479706512110a09696d6d757461" .
            "626c6518042001280812350a046461746118052003280b321f2e6d657368" .
            "706161732e536563726574496e7075742e44617461456e7472794206e2df" .
            "1f0220011a2b0a0944617461456e747279120b0a036b6579180120012809" .
            "120d0a0576616c75651802200128093a02380122be010a06536563726574" .
            "121e0a046e616d651801200128094210e2df1f0c0a0a5e2e7b312c323235" .
            "7d2412220a047479706518032001280e32142e6d657368706161732e5365" .
            "637265745479706512110a09696d6d757461626c6518042001280812300a" .
            "046461746118052003280b321a2e6d657368706161732e5365637265742e" .
            "44617461456e7472794206e2df1f0220011a2b0a0944617461456e747279" .
            "120b0a036b6579180120012809120d0a0576616c75651802200128093a02" .
            "380122d5010a11536572766572544c5353657474696e677312160a0e6874" .
            "7470735f7265646972656374180120012808121f0a046d6f646518022001" .
            "280e32112e6d657368706161732e544c536d6f646512130a0b7365637265" .
            "745f6e616d6518032001280912190a117375626a6563745f616c745f6e61" .
            "6d6573180420032809121f0a177665726966795f63657274696669636174" .
            "655f73706b69180520032809121f0a177665726966795f63657274696669" .
            "636174655f6861736818062003280912150a0d6369706865725f73756974" .
            "657318072003280922c6010a0f476174657761794c697374656e65721214" .
            "0a04706f727418012001280d4206e2df1f021000121e0a046e616d651802" .
            "200128094210e2df1f0c0a0a5e2e7b312c3232357d2412350a0870726f74" .
            "6f636f6c18032001280e321b2e6d657368706161732e5472616e73706f72" .
            "7450726f746f636f6c4206e2df1f02100012150a05686f73747318042003" .
            "28094206e2df1f026001122f0a0a746c735f636f6e66696718052001280b" .
            "321b2e6d657368706161732e536572766572544c5353657474696e677322" .
            "450a0747617465776179120c0a046e616d65180120012809122c0a096c69" .
            "7374656e65727318032003280b32192e6d657368706161732e4761746577" .
            "61794c697374656e6572225c0a0c47617465776179496e707574121e0a04" .
            "6e616d651801200128094210e2df1f0c0a0a5e2e7b312c3232357d24122c" .
            "0a096c697374656e65727318032003280b32192e6d657368706161732e47" .
            "6174657761794c697374656e657222e3010a0948545450526f757465121e" .
            "0a046e616d651801200128094210e2df1f0c0a0a5e2e7b312c3232357d24" .
            "12140a04706f727418022001280d4206e2df1f02100012130a0b70617468" .
            "5f70726566697818032001280912130a0b726577726974655f7572691805" .
            "2001280912150a0d616c6c6f775f6f726967696e7318062003280912150a" .
            "0d616c6c6f775f6d6574686f647318072003280912150a0d616c6c6f775f" .
            "6865616465727318082003280912160a0e6578706f73655f686561646572" .
            "7318092003280912190a11616c6c6f775f63726564656e7469616c73180a" .
            "2001280822530a07526f7574696e67120f0a076761746577617918012001" .
            "2809120d0a05686f73747318022003280912280a0b687474705f726f7574" .
            "657318042003280b32132e6d657368706161732e48545450526f75746522" .
            "d9010a09436f6e7461696e6572121e0a046e616d651801200128094210e2" .
            "df1f0c0a0a5e2e7b312c3232357d24121f0a05696d616765180220012809" .
            "4210e2df1f0c0a0a5e2e7b312c3232357d24120c0a046172677318032003" .
            "280912290a03656e7618042003280b321c2e6d657368706161732e436f6e" .
            "7461696e65722e456e76456e74727912260a05706f72747318052003280b" .
            "32172e6d657368706161732e436f6e7461696e6572506f72741a2a0a0845" .
            "6e76456e747279120b0a036b6579180120012809120d0a0576616c756518" .
            "02200128093a023801228d020a03417070121e0a046e616d651801200128" .
            "094210e2df1f0c0a0a5e2e7b312c3232357d24122f0a0a636f6e7461696e" .
            "65727318032003280b32132e6d657368706161732e436f6e7461696e6572" .
            "4206e2df1f02600112100a087265706c6963617318082001280d122a0a07" .
            "726f7574696e67180b2001280b32112e6d657368706161732e526f757469" .
            "6e674206e2df1f022001122f0a0e61757468656e7469636174696f6e180c" .
            "2001280b320f2e6d657368706161732e417574686e4206e2df1f02200112" .
            "190a11696d6167655f70756c6c5f736563726574180e20012809122b0a06" .
            "73746174757318142001280b32132e6d657368706161732e417070537461" .
            "7475734206e2df1f02200122ab010a045461736b121e0a046e616d651801" .
            "200128094210e2df1f0c0a0a5e2e7b312c3232357d2412190a11696d6167" .
            "655f70756c6c5f736563726574180320012809122f0a0a636f6e7461696e" .
            "65727318042003280b32132e6d657368706161732e436f6e7461696e6572" .
            "4206e2df1f02600112220a087363686564756c651807200128094210e2df" .
            "1f0c0a0a5e2e7b312c3232357d2412130a0b636f6d706c6574696f6e7318" .
            "082001280d22b0010a095461736b496e707574121e0a046e616d65180120" .
            "0128094210e2df1f0c0a0a5e2e7b312c3232357d2412190a11696d616765" .
            "5f70756c6c5f736563726574180320012809122f0a0a636f6e7461696e65" .
            "727318042003280b32132e6d657368706161732e436f6e7461696e657242" .
            "06e2df1f02600112220a087363686564756c651807200128094210e2df1f" .
            "0c0a0a5e2e7b312c3232357d2412130a0b636f6d706c6574696f6e731808" .
            "2001280d223d0a0d436f6e7461696e6572506f7274120c0a046e616d6518" .
            "0120012809120e0a066e756d62657218022001280d120e0a066578706f73" .
            "6518032001280822dd010a08417070496e707574121e0a046e616d651801" .
            "200128094210e2df1f0c0a0a5e2e7b312c3232357d24122f0a0a636f6e74" .
            "61696e65727318032003280b32132e6d657368706161732e436f6e746169" .
            "6e65724206e2df1f02600112100a087265706c6963617318072001280d12" .
            "2a0a07726f7574696e67180a2001280b32112e6d657368706161732e526f" .
            "7574696e674206e2df1f02200112270a0e61757468656e7469636174696f" .
            "6e180c2001280b320f2e6d657368706161732e417574686e12190a11696d" .
            "6167655f70756c6c5f736563726574180e2001280922250a03526566121e" .
            "0a046e616d651801200128094210e2df1f0c0a0a5e2e7b312c3232357d24" .
            "223b0a075265706c696361120d0a05706861736518012001280912110a09" .
            "636f6e646974696f6e180220012809120e0a06726561736f6e1803200128" .
            "0922300a0941707053746174757312230a087265706c6963617318012003" .
            "280b32112e6d657368706161732e5265706c69636122160a034c6f67120f" .
            "0a076d657373616765180120012809222b0a044170707312230a0c617070" .
            "6c69636174696f6e7318012003280b320d2e6d657368706161732e417070" .
            "22260a055461736b73121d0a057461736b7318012003280b320e2e6d6573" .
            "68706161732e5461736b229b010a074c6f674f707473121e0a046e616d65" .
            "1801200128094210e2df1f0c0a0a5e2e7b312c3232357d2412230a09636f" .
            "6e7461696e65721802200128094210e2df1f0c0a0a5e2e7b312c3232357d" .
            "2412150a0d73696e63655f7365636f6e647318032001280312120a0a7461" .
            "696c5f6c696e657318042001280312100a0870726576696f7573180a2001" .
            "2808120e0a0673747265616d180b200128082a3d0a0a5365637265745479" .
            "7065120a0a064f5041515545100012100a0c544c535f434552545f4b4559" .
            "100112110a0d444f434b45525f434f4e46494710022a700a115472616e73" .
            "706f727450726f746f636f6c12140a10494e56414c49445f50524f544f43" .
            "4f4c100012080a0448545450100112090a054854545053100212080a0447" .
            "525043100312090a054854545032100412090a054d4f4e474f100512070a" .
            "03544350100612070a03544c5310072a5a0a07544c536d6f6465120f0a0b" .
            "504153535448524f5547481000120a0a0653494d504c451001120a0a064d" .
            "555455414c100212140a104155544f5f504153535448524f554748100312" .
            "100a0c495354494f5f4d555455414c1004328b080a0f4d65736850616173" .
            "5365727669636512300a0943726561746541707012122e6d657368706161" .
            "732e417070496e7075741a0d2e6d657368706161732e417070220012300a" .
            "0955706461746541707012122e6d657368706161732e417070496e707574" .
            "1a0d2e6d657368706161732e417070220012340a0944656c657465417070" .
            "120d2e6d657368706161732e5265661a162e676f6f676c652e70726f746f" .
            "6275662e456d707479220012280a06476574417070120d2e6d6573687061" .
            "61732e5265661a0d2e6d657368706161732e417070220012340a084c6973" .
            "744170707312162e676f6f676c652e70726f746f6275662e456d7074791a" .
            "0e2e6d657368706161732e41707073220012330a0a437265617465546173" .
            "6b12132e6d657368706161732e5461736b496e7075741a0e2e6d65736870" .
            "6161732e5461736b220012330a0a5570646174655461736b12132e6d6573" .
            "68706161732e5461736b496e7075741a0e2e6d657368706161732e546173" .
            "6b220012350a0a44656c6574655461736b120d2e6d657368706161732e52" .
            "65661a162e676f6f676c652e70726f746f6275662e456d7074792200122a" .
            "0a074765745461736b120d2e6d657368706161732e5265661a0e2e6d6573" .
            "68706161732e5461736b220012360a094c6973745461736b7312162e676f" .
            "6f676c652e70726f746f6275662e456d7074791a0f2e6d65736870616173" .
            "2e5461736b732200123c0a0d4372656174654761746577617912162e6d65" .
            "7368706161732e47617465776179496e7075741a112e6d65736870616173" .
            "2e476174657761792200123c0a0d5570646174654761746577617912162e" .
            "6d657368706161732e47617465776179496e7075741a112e6d6573687061" .
            "61732e47617465776179220012380a0d44656c6574654761746577617912" .
            "0d2e6d657368706161732e5265661a162e676f6f676c652e70726f746f62" .
            "75662e456d707479220012300a0a47657447617465776179120d2e6d6573" .
            "68706161732e5265661a112e6d657368706161732e476174657761792200" .
            "12390a0c43726561746553656372657412152e6d657368706161732e5365" .
            "63726574496e7075741a102e6d657368706161732e536563726574220012" .
            "390a0c55706461746553656372657412152e6d657368706161732e536563" .
            "726574496e7075741a102e6d657368706161732e53656372657422001237" .
            "0a0c44656c657465536563726574120d2e6d657368706161732e5265661a" .
            "162e676f6f676c652e70726f746f6275662e456d7074792200122e0a0947" .
            "6574536563726574120d2e6d657368706161732e5265661a102e6d657368" .
            "706161732e536563726574220012320a0a53747265616d4c6f677312112e" .
            "6d657368706161732e4c6f674f7074731a0d2e6d657368706161732e4c6f" .
            "6722003001420c5a0a6d657368706161737062620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

