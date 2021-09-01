<?php
declare(strict_types=1);

namespace Yakubenko\Message;

class Message
{
    private string $type;
    private array $payload;

    /**
     * @param string $type Message type
     * @param array $payload Message Payload
     */
    public function __construct(
        string $type,
        array $payload = []
    ) {
        $this->type = $type;
        $this->payload = $payload;
    }

    /**
     * Get the value of type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get the value of payload
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }
}
