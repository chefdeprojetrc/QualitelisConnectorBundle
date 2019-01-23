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
 * Class Comment.
 *
 * @author Maxime Cornet <mcornet@altima-agency.com>
 */
class Comment implements CommentInterface
{
    /** @var string $firstName */
    protected $firstName;

    /** @var string $lastName */
    protected $lastName;

    /** @var \DateTime $stayStart */
    protected $stayStart;

    /** @var \DateTime $stayEnd */
    protected $stayEnd;

    /** @var \DateTime $replyDate */
    protected $replyDate;

    /** @var int $note */
    protected $note;

    /** @var string $comment */
    protected $comment;

    /** @var string $commentTitle */
    protected $commentTitle;

    /** @var bool $pinned */
    protected $pinned;

    /** @var string $profile1 */
    protected $profile1;

    /** @var string $profile2 */
    protected $profile2;

    /** @var string $profile3 */
    protected $profile3;

    /** @var string $idSejour */
    protected $idSejour;

    /** @var string|null $replyMail */
    protected $replyMail;

    /** @var Prestataire $prestataire */
    protected $prestataire;

    /** @var string $language */
    protected $language;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstname(string $firstName): CommentInterface
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): CommentInterface
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStayStart(): \DateTime
    {
        return $this->stayStart;
    }

    /**
     * @param string $stayStart
     *
     * @return $this
     */
    public function setStayStart(string $stayStart): CommentInterface
    {
        $this->stayStart = \DateTime::createFromFormat('d/m/Y', $stayStart);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStayEnd(): \DateTime
    {
        return $this->stayEnd;
    }

    /**
     * @param string $stayEnd
     *
     * @return $this
     */
    public function setStayEnd(string $stayEnd): CommentInterface
    {
        $this->stayEnd = \DateTime::createFromFormat('d/m/Y', $stayEnd);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReplyDate(): \DateTime
    {
        return $this->replyDate;
    }

    /**
     * @param string $replyDate
     *
     * @return $this
     */
    public function setReplyDate($replyDate): CommentInterface
    {
        $this->replyDate = \DateTime::createFromFormat('d/m/Y', $replyDate);

        return $this;
    }

    /**
     * @return int
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * @param int $note
     *
     * @return $this
     */
    public function setNote(int $note): CommentInterface
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment(string $comment): CommentInterface
    {
        $this->comment = mb_convert_encoding($comment, 'UTF-8', 'auto');

        return $this;
    }

    /**
     * @return string
     */
    public function getCommentTitle(): string
    {
        return $this->commentTitle;
    }

    /**
     * @param string $commentTitle
     *
     * @return $this
     */
    public function setCommentTitle(string $commentTitle): CommentInterface
    {
        $this->commentTitle = mb_convert_encoding(substr($commentTitle, 0, 254), 'UTF-8', 'auto');

        return $this;
    }

    /**
     * @return bool
     */
    public function isPinned(): bool
    {
        return $this->pinned;
    }

    /**
     * @param bool $pinned
     *
     * @return $this
     */
    public function setPinned(bool $pinned): CommentInterface
    {
        $this->pinned = $pinned;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfile1(): string
    {
        return $this->profile1;
    }

    /**
     * @param string $profile1
     *
     * @return $this
     */
    public function setProfile1(string $profile1): CommentInterface
    {
        $this->profile1 = $profile1;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfile2(): string
    {
        return $this->profile2;
    }

    /**
     * @param string $profile2
     *
     * @return $this
     */
    public function setProfile2(string$profile2): CommentInterface
    {
        $this->profile2 = $profile2;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfile3(): string
    {
        return $this->profile3;
    }

    /**
     * @param string $profile3
     *
     * @return $this
     */
    public function setProfile3(string $profile3): CommentInterface
    {
        $this->profile3 = $profile3;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdSejour(): string
    {
        return $this->idSejour;
    }

    /**
     * @param string $idSejour
     *
     * @return $this
     */
    public function setIdSejour(string $idSejour): CommentInterface
    {
        $this->idSejour = $idSejour;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getReplyMail(): ?array
    {
        return json_decode($this->replyMail, true);
    }

    /**
     * @param array|null $replyMail
     *
     * @return Comment
     */
    public function setReplyMail($replyMail): CommentInterface
    {
        $this->replyMail = json_encode($replyMail);

        return $this;
    }

    /**
     * @return PrestataireInterface
     */
    public function getPrestataire(): PrestataireInterface
    {
        return $this->prestataire;
    }

    /**
     * @param PrestataireInterface $prestataire
     *
     * @return $this
     */
    public function setPrestataire(PrestataireInterface $prestataire): CommentInterface
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language): CommentInterface
    {
        $this->language = $language;

        return $this;
    }
}
