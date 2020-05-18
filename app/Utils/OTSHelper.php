<?php


namespace App\Utils;


use Aliyun\OTS\Consts\DirectionConst;
use Aliyun\OTS\OTSClient;

final class OTSHelper
{
    public $endPoint;
    public $accessKeyId;
    public $accessKeySecret;
    public $instanceName;

    private $client;

    public function __construct()
    {
        $this->endPoint = config("ots.end_point");
        $this->accessKeyId = config("ots.access_key_id");
        $this->accessKeySecret = config("ots.access_key_secret");
        $this->instanceName = config("ots.instance_name");

        $this->client = new OTSClient([
            'EndPoint' => $this->endPoint,
            'AccessKeyID' => $this->accessKeyId,
            'AccessKeySecret' => $this->accessKeySecret,
            'InstanceName' => $this->instanceName,
        ]);
    }

    /**
     * @param string $tableName tableStore表名
     * @param array $primaryKeys 查询的主键数据
     * @return string
     * @throws \Aliyun\OTS\OTSClientException
     * @throws \Aliyun\OTS\OTSServerException
     */
    public function getTableColumnsByRiskId(string $tableName, array $primaryKeys): string
    {
        $request = [
            'table_name' => $tableName,
            'primary_key' => array( // 主键
                array('rowKey', $primaryKeys["row_key"]),
                array('riskId', $primaryKeys["risk_id"]),
                array('certNo', $primaryKeys["cert_no"]),
                array('mobile', $primaryKeys["mobile"])            ),
            'max_versions' => 1
        ];
        $results = $this->client->getRow($request);
        $columns = [];
        foreach ($results["primary_key"] as $primaryKey){
            $tmpKey = $primaryKey[0];
            $columns[] = str_pad($tmpKey,strlen($tmpKey) + 1,":",STR_PAD_LEFT);
        }
        foreach ($results["attribute_columns"] as $attributeColumn){
            $columns[] = $attributeColumn[0];
        }

        $str = "'tablestore.columns.mapping'='";
        $mapStr = join(',',$columns);
        $mapStr = str_pad($mapStr,strlen($mapStr) + strlen($str), "$str", STR_PAD_LEFT);

        return $mapStr;
    }
}
