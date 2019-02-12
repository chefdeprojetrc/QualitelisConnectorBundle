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

use Doctrine\Common\Collections\Collection;

/**
 * Interface PrestataireInterface.
 *
 * @author Maxime Cornet <xelysion@icloud.com>
 */
interface PrestataireInterface
{
    /**
     * @return int
     */
    public function getIdPrestataire(): int;

    /**
     * @param int $idPrestataire
     *
     * @return $this
     */
    public function setIdPrestataire(int $idPrestataire): self;

    /**
     * @return int
     */
    public function getNbAnsweredSurveys(): int;

    /**
     * @param int $nbAnsweredSurveys
     *
     * @return $this
     */
    public function setNbAnsweredSurveys(int $nbAnsweredSurveys): self;

    /**
     * @return float
     */
    public function getSatisfactionAverage(): float;

    /**
     * @param float $satisfactionAverage
     *
     * @return $this
     */
    public function setSatisfactionAverage(float $satisfactionAverage): self;

    /**
     * @return ArrayCollection
     */
    public function getComments();

    /**
     * @param ArrayCollection $comments
     *
     * @return $this
     */
    public function setComments($comments): self;

    /**
     * @param CommentInterface $comment
     *
     * @return $this
     */
    public function addComment(CommentInterface $comment): self;

    /**
     * @param CommentInterface $comment
     *
     * @return $this
     */
    public function removeComment(CommentInterface $comment): self;

    /**
     * @return array|null
     */
    public function getTagResult(): ?array;

    /**
     * @param array|null $tagResult
     *
     * @return $this
     */
    public function setTagResult($tagResult): self;

    /**
     * @return array|null
     */
    public function getQiResult(): ?array;

    /**
     * @param array|null $qiResult
     *
     * @return $this
     */
    public function setQiResult($qiResult): self;

    /**
     * @return array|null
     */
    public function getQiSources(): ?array;

    /**
     * @param array|null $qiSources
     *
     * @return $this
     */
    public function setQiSources($qiSources): self;
}
