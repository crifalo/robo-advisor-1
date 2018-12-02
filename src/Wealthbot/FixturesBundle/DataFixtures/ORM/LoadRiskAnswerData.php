<?php

namespace Wealthbot\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Wealthbot\RiaBundle\Entity\RiskAnswer;

class LoadRiskAnswerData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $riskAnswer11 = new RiskAnswer();
        $riskAnswer11->setTitle('Sell all of your investments');
        $riskAnswer11->setQuestion($this->getReference('risk-question-1'));
        $manager->persist($riskAnswer11);
        $this->setReference('risk-answer-1-1', $riskAnswer11);

        $riskAnswer12 = new RiskAnswer();
        $riskAnswer12->setTitle('Sell some of your investments');
        $riskAnswer12->setQuestion($this->getReference('risk-question-1'));
        $manager->persist($riskAnswer12);
        $this->setReference('risk-answer-1-2', $riskAnswer12);

        $riskAnswer13 = new RiskAnswer();
        $riskAnswer13->setTitle('Keep all and do nothing');
        $riskAnswer13->setQuestion($this->getReference('risk-question-1'));
        $manager->persist($riskAnswer13);
        $this->setReference('risk-answer-1-3', $riskAnswer13);

        $riskAnswer14 = new RiskAnswer();
        $riskAnswer14->setTitle('Buy more');
        $riskAnswer14->setQuestion($this->getReference('risk-question-1'));
        $manager->persist($riskAnswer14);
        $this->setReference('risk-answer-1-4', $riskAnswer14);

        $riskAnswer21 = new RiskAnswer();
        $riskAnswer21->setTitle('+/- 15%');
        $riskAnswer21->setQuestion($this->getReference('risk-question-2'));
        $manager->persist($riskAnswer21);
        $this->setReference('risk-answer-2-1', $riskAnswer21);

        $riskAnswer22 = new RiskAnswer();
        $riskAnswer22->setTitle('+/- 10%');
        $riskAnswer22->setQuestion($this->getReference('risk-question-2'));
        $manager->persist($riskAnswer22);
        $this->setReference('risk-answer-2-2', $riskAnswer22);

        $riskAnswer23 = new RiskAnswer();
        $riskAnswer23->setTitle('+/- 5%');
        $riskAnswer23->setQuestion($this->getReference('risk-question-2'));
        $manager->persist($riskAnswer23);
        $this->setReference('risk-answer-2-3', $riskAnswer23);

        $riskAnswer31 = new RiskAnswer();
        $riskAnswer31->setTitle('Interested in steady returns if I accept lower returns');
        $riskAnswer31->setQuestion($this->getReference('risk-question-3'));
        $manager->persist($riskAnswer31);
        $this->setReference('risk-answer-3-1', $riskAnswer31);

        $riskAnswer32 = new RiskAnswer();
        $riskAnswer32->setTitle('Interested in maximizing long term gains, even if I experience short term losses');
        $riskAnswer32->setQuestion($this->getReference('risk-question-3'));
        $manager->persist($riskAnswer32);
        $this->setReference('risk-answer-3-2', $riskAnswer32);

        $riskAnswer41 = new RiskAnswer();
        $riskAnswer41->setTitle('Less than 3 years');
        $riskAnswer41->setQuestion($this->getReference('risk-question-4'));
        $manager->persist($riskAnswer41);
        $this->setReference('risk-answer-4-1', $riskAnswer41);

        $riskAnswer42 = new RiskAnswer();
        $riskAnswer42->setTitle('3 ~ 5 years');
        $riskAnswer42->setQuestion($this->getReference('risk-question-4'));
        $manager->persist($riskAnswer42);
        $this->setReference('risk-answer-4-2', $riskAnswer42);

        $riskAnswer43 = new RiskAnswer();
        $riskAnswer43->setTitle('6 ~ 10 years');
        $riskAnswer43->setQuestion($this->getReference('risk-question-4'));
        $manager->persist($riskAnswer43);
        $this->setReference('risk-answer-4-3', $riskAnswer43);

        $riskAnswer44 = new RiskAnswer();
        $riskAnswer44->setTitle('11 years or more');
        $riskAnswer44->setQuestion($this->getReference('risk-question-4'));
        $manager->persist($riskAnswer44);
        $this->setReference('risk-answer-4-4', $riskAnswer44);

        $riskAnswer51 = new RiskAnswer();
        $riskAnswer51->setTitle('None');
        $riskAnswer51->setQuestion($this->getReference('risk-question-5'));
        $manager->persist($riskAnswer51);
        $this->setReference('risk-answer-5-1', $riskAnswer51);

        $riskAnswer52 = new RiskAnswer();
        $riskAnswer52->setTitle('Bonds / Bond Funds');
        $riskAnswer52->setQuestion($this->getReference('risk-question-5'));
        $manager->persist($riskAnswer51);
        $this->setReference('risk-answer-5-2', $riskAnswer52);

        $riskAnswer53 = new RiskAnswer();
        $riskAnswer53->setTitle('Stock / Stock Funds');
        $riskAnswer53->setQuestion($this->getReference('risk-question-5'));
        $manager->persist($riskAnswer53);
        $this->setReference('risk-answer-5-3', $riskAnswer53);

        $riskAnswer54 = new RiskAnswer();
        $riskAnswer54->setTitle('Other international securities / funds');
        $riskAnswer54->setQuestion($this->getReference('risk-question-5'));
        $manager->persist($riskAnswer54);
        $this->setReference('risk-answer-5-4', $riskAnswer54);

        $riskAnswer61 = new RiskAnswer();
        $riskAnswer61->setTitle('None');
        $riskAnswer61->setQuestion($this->getReference('risk-question-6'));
        $manager->persist($riskAnswer61);
        $this->setReference('risk-answer-6-1', $riskAnswer61);

        $riskAnswer62 = new RiskAnswer();
        $riskAnswer62->setTitle('Basic / Limited');
        $riskAnswer62->setQuestion($this->getReference('risk-question-6'));
        $manager->persist($riskAnswer62);
        $this->setReference('risk-answer-6-2', $riskAnswer62);

        $riskAnswer63 = new RiskAnswer();
        $riskAnswer63->setTitle('Good');
        $riskAnswer63->setQuestion($this->getReference('risk-question-6'));
        $manager->persist($riskAnswer63);
        $this->setReference('risk-answer-6-3', $riskAnswer63);

        $riskAnswer64 = new RiskAnswer();
        $riskAnswer64->setTitle('Extensive');
        $riskAnswer64->setQuestion($this->getReference('risk-question-6'));
        $manager->persist($riskAnswer64);
        $this->setReference('risk-answer-6-4', $riskAnswer64);

        $riskAnswer71 = new RiskAnswer();
        $riskAnswer71->setTitle('Most concerned about my investment losing value');
        $riskAnswer71->setQuestion($this->getReference('risk-question-7'));
        $manager->persist($riskAnswer71);
        $this->setReference('risk-answer-7-1', $riskAnswer71);

        $riskAnswer72 = new RiskAnswer();
        $riskAnswer72->setTitle('Equally concerned about my investment losing or gaining value');
        $riskAnswer72->setQuestion($this->getReference('risk-question-7'));
        $manager->persist($riskAnswer72);
        $this->setReference('risk-answer-7-2', $riskAnswer72);

        $riskAnswer73 = new RiskAnswer();
        $riskAnswer73->setTitle('Most concerned about my investment gaining value');
        $riskAnswer73->setQuestion($this->getReference('risk-question-7'));
        $manager->persist($riskAnswer73);
        $this->setReference('risk-answer-7-3', $riskAnswer73);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}
