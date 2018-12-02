<?php

namespace Wealthbot\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Wealthbot\RiaBundle\Entity\RiskQuestion;
use Wealthbot\UserBundle\Entity\User;

class LoadRiskQuestionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /** @var User $adminUser */
        $adminUser = $this->getReference('user-admin');

        $riskQuestion1 = new RiskQuestion();
        $riskQuestion1->setOwner($adminUser);
        $riskQuestion1->setTitle('If your entire investment portfolio lost 10% of its value in a month during a market decline, what would you do?');
        $riskQuestion1->setDescription('Lorem ipsum');
        $riskQuestion1->setSequence(2);
        $manager->persist($riskQuestion1);

        $riskQuestion2 = new RiskQuestion();
        $riskQuestion2->setOwner($adminUser);
        $riskQuestion2->setTitle('Which set of hypothetical portfolio returns in a year is most acceptable to you?');
        $riskQuestion2->setDescription('Lorem ipsum');
        $riskQuestion2->setSequence(3);
        $manager->persist($riskQuestion2);

        $riskQuestion3 = new RiskQuestion();
        $riskQuestion3->setOwner($adminUser);
        $riskQuestion3->setTitle('Choose the statement that best reflects your thoughts about reaching your financial goal :');
        $riskQuestion3->setDescription('Lorem ipsum');
        $riskQuestion3->setSequence(4);
        $manager->persist($riskQuestion3);

        $riskQuestion4 = new RiskQuestion();
        $riskQuestion4->setOwner($adminUser);
        $riskQuestion4->setTitle('You plan to begin withdrawing money from your investments in :');
        $riskQuestion4->setDescription('Lorem ipsum');
        $riskQuestion4->setSequence(5);
        $manager->persist($riskQuestion4);

        $riskQuestion5 = new RiskQuestion();
        $riskQuestion5->setOwner($adminUser);
        $riskQuestion5->setTitle('Select the investments you currently own or have previously owned :');
        $riskQuestion5->setDescription('Lorem ipsum');
        $riskQuestion5->setSequence(6);
        $manager->persist($riskQuestion5);

        $riskQuestion6 = new RiskQuestion();
        $riskQuestion6->setOwner($adminUser);
        $riskQuestion6->setTitle('Choose the statement that best describes your financial knowledge :');
        $riskQuestion6->setDescription('Lorem ipsum');
        $riskQuestion6->setSequence(7);
        $manager->persist($riskQuestion6);

        $riskQuestion7 = new RiskQuestion();
        $riskQuestion7->setOwner($adminUser);
        $riskQuestion7->setTitle('Choose the statement that best describes your investing rules :');
        $riskQuestion7->setDescription('Lorem ipsum');
        $riskQuestion7->setSequence(8);
        $manager->persist($riskQuestion7);

        $manager->flush();

        $this->addReference('risk-question-1', $riskQuestion1);
        $this->addReference('risk-question-2', $riskQuestion2);
        $this->addReference('risk-question-3', $riskQuestion3);
        $this->addReference('risk-question-4', $riskQuestion4);
        $this->addReference('risk-question-5', $riskQuestion5);
        $this->addReference('risk-question-6', $riskQuestion6);
        $this->addReference('risk-question-7', $riskQuestion7);
    }

    public function getOrder()
    {
        return 2;
    }
}
