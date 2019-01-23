<?php

/*
 * This file is part of the Qualitelis Connector Bundle
 *
 * (c) Maxime Cornet <https://github.com/xelysion/qualitelis-connector-bundle/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elysion\QualitelisConnectorBundle\Model;

/**
 * Interface CommentInterface.
 *
 * @author Maxime Cornet <xelysion@icloud.com>
 */
interface CommentInterface
{
    /**
     * @return string
     */
    public function getFirstname(): string;

    /**
     * @param string $firstname
     *
     * @return $this
     */
    public function setFirstname(string $firstname): self;

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): self;

    /**
     * @return \DateTime
     */
    public function getStayStart(): \DateTime;

    /**
     * @param string $stayStart
     *
     * @return $this
     */
    public function setStayStart(string $stayStart): self;

    /**
     * @return \DateTime
     */
    public function getStayEnd(): \DateTime;

    /**
     * @param string $stayEnd
     *
     * @return $this
     */
    public function setStayEnd(string $stayEnd): self;

    /**
     * @return \DateTime
     */
    public function getReplyDate(): \DateTime;

    /**
     * @param string $replyDate
     *
     * @return $this
     */
    public function setReplyDate(string $replyDate): self;

    /**
     * @return int
     */
    public function getNote(): int;

    /**
     * @param int $note
     *
     * @return $this
     */
    public function setNote(int $note): self;

    /**
     * @return string
     */
    public function getComment(): string;

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment(string $comment): self;

    /**
     * @return string
     */
    public function getCommentTitle(): string;

    /**
     * @param string $commentTitle
     *
     * @return $this
     */
    public function setCommentTitle(string $commentTitle): self;

    /**
     * @return bool
     */
    public function isPinned(): bool;

    /**
     * @param bool $pinned
     *
     * @return $this
     */
    public function setPinned(bool $pinned): self;

    /**
     * @return string
     */
    public function getProfile1(): string;

    /**
     * @param string $profile1
     *
     * @return $this
     */
    public function setProfile1(string $profile1): self;

    /**
     * @return string
     */
    public function getProfile2(): string;

    /**
     * @param string $profile2
     *
     * @return $this
     */
    public function setProfile2(string $profile2): self;

    /**
     * @return string
     */
    public function getProfile3(): string;

    /**
     * @param string $profile3
     *
     * @return $this
     */
    public function setProfile3(string $profile3): self;

    /**
     * @return string
     */
    public function getIdSejour(): string;

    /**
     * @param string $idSejour
     *
     * @return $this
     */
    public function setIdSejour(string $idSejour): self;

    /**
     * @return array|null
     */
    public function getReplyMail(): ?array;

    /**
     * @param array|null $replyMail
     *
     * @return self
     */
    public function setReplyMail($replyMail): self;

    /**
     * @return PrestataireInterface
     */
    public function getPrestataire(): PrestataireInterface;

    /**
     * @param PrestataireInterface $prestataire
     *
     * @return $this
     */
    public function setPrestataire(PrestataireInterface $prestataire): self;
}
