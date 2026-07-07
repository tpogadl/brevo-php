<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * DNS records configuration and status
 */
class GetDomainConfigurationResponseDnsRecords extends JsonSerializableType
{
    /**
     * @var GetDomainConfigurationResponseDnsRecordsBrevoCode $brevoCode Brevo verification code record
     */
    #[JsonProperty('brevo_code')]
    public GetDomainConfigurationResponseDnsRecordsBrevoCode $brevoCode;

    /**
     * @var GetDomainConfigurationResponseDnsRecordsDkimRecord|null $dkimRecord DKIM authentication record
     */
    #[JsonProperty('dkim_record')]
    public ?GetDomainConfigurationResponseDnsRecordsDkimRecord $dkimRecord;

    /**
     * @var GetDomainConfigurationResponseDnsRecordsDkimRecord $dkim1Record DKIM authentication record
     */
    #[JsonProperty('dkim1Record')]
    public GetDomainConfigurationResponseDnsRecordsDkimRecord $dkim1Record;

    /**
     * @var GetDomainConfigurationResponseDnsRecordsDkimRecord $dkim2Record DKIM authentication record
     */
    #[JsonProperty('dkim2Record')]
    public GetDomainConfigurationResponseDnsRecordsDkimRecord $dkim2Record;

    /**
     * @var GetDomainConfigurationResponseDnsRecordsDmarcRecord $dmarcRecord DMARC policy record
     */
    #[JsonProperty('dmarc_record')]
    public GetDomainConfigurationResponseDnsRecordsDmarcRecord $dmarcRecord;

    /**
     * @param array{
     *   brevoCode: GetDomainConfigurationResponseDnsRecordsBrevoCode,
     *   dkimRecord: GetDomainConfigurationResponseDnsRecordsDkimRecord|null,
     *   dkim1Record: GetDomainConfigurationResponseDnsRecordsDkimRecord,
     *   dkim2Record: GetDomainConfigurationResponseDnsRecordsDkimRecord,
     *   dmarcRecord: GetDomainConfigurationResponseDnsRecordsDmarcRecord,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->brevoCode = $values['brevoCode'];
        $this->dkimRecord = $values['dkimRecord'];
        $this->dkim1Record = $values['dkim1Record'];
        $this->dkim2Record = $values['dkim2Record'];
        $this->dmarcRecord = $values['dmarcRecord'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
